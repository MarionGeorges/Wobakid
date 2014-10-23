<?php
class Video  extends ObjectModel
{
 	/** @var string Name */	
	public $width;
	public $height;
	public $title;
	public $link;	
	public $publicTitle;
	public $desc;
	public $className;
	public $anchorName;
	
	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'opartproductvideo',
		'primary' => 'id_opartproductvideo',
		'multilang' => true,
		'fields' => array(				
			'width' => 	array('type' => self::TYPE_INT, 'validate'=>'isInt','required' => true),
			'height' => array('type' => self::TYPE_INT, 'validate'=>'isInt','required' => true),			
			'title' => 	array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 256),
			'className' => 	array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 256),
			'anchorName' => 	array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 256),
			// Lang fields
			'link' => 	array('type' => self::TYPE_STRING, 'lang' => true, 'validate'=> 'isUrl', 'required' => true ),
			'publicTitle' => 	array('type' => self::TYPE_STRING, 'lang' => true, 'validate'=> 'isGenericName', 'required' => false ),
			'desc' => 	array('type' => self::TYPE_HTML, 'lang' => true, 'validate'=> 'isString', 'required' => false )
		),
	);
	
	public function add($autodate = true, $null_values = false)
	{
		if (!parent::add($autodate, $null_values))
			return false;
		else if (isset($_POST['products']))
			return $this->setProducts($_POST['products']);
		return true;
	}
	
	public function getProducts($associated = true, Context $context = null)
	{
		if (!$context)
			$context = Context::getContext();
		$id_lang = $this->id_lang ? $this->id_lang : $context->language->id;
	
		if (!$this->id && $associated)
			return array();
	
		$in = $associated ? 'IN' : 'NOT IN';
		$sql='
			SELECT pl.name,pl.id_product 
			FROM `'._DB_PREFIX_.'product` p 
			LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON p.id_product = pl.id_product'.Shop::addSqlRestrictionOnLang('pl').' 
			'.Shop::addSqlAssociation('product', 'p').'
			WHERE pl.id_lang = '.(int)$id_lang.'
			AND product_shop.active = 1
			'.($this->id ? ('AND p.id_product '.$in.' (SELECT op.id_product FROM `'._DB_PREFIX_.'opartproductvideo_product` op WHERE op.id_opartproductvideo = '.(int)$this->id.')') : '').'
			ORDER BY pl.name
		';
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	}

	public function setProducts($array)
	{
		$result = Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'opartproductvideo_product WHERE id_opartproductvideo = '.(int)$this->id);
		if (is_array($array))
		{
			$array = array_map('intval', $array);
			$result &= ObjectModel::updateMultishopTable('Product', array('indexed' => 0), 'a.id_product IN ('.implode(',', $array).')');
			$ids = array();
			foreach ($array as $id_product)
				$ids[] = '('.(int)$id_product.','.(int)$this->id.')';
	
			if ($result)
			{
				$result &= Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'opartproductvideo_product (id_product, id_opartproductvideo) VALUES '.implode(',', $ids));
				if (Configuration::get('PS_SEARCH_INDEXATION'))
					$result &= Search::indexation(false);
			}
		}
		return $result;
	}
	
	public function deleteProductLink() {
		$sql='DELETE FROM '._DB_PREFIX_.'opartproductvideo_product WHERE id_opartproductvideo = '.(int)$this->id;
		return Db::getInstance()->execute($sql);
	}
	
	public function getVideoByProduct($idProd,$id_lang) {
		$sql='
		SELECT v.title,v.width,v.height,v.className,v.anchorName,vl.link,vl.desc,vl.publicTitle
		FROM `'._DB_PREFIX_.'opartproductvideo_product` vp, `'._DB_PREFIX_.'opartproductvideo` v
		LEFT JOIN `'._DB_PREFIX_.'opartproductvideo_lang` vl ON v.id_opartproductvideo = vl.id_opartproductvideo
		WHERE vl.id_lang = '.(int)$id_lang.'
		AND vp.id_product='.$idProd.' AND vp.id_opartproductvideo = v.id_opartproductvideo
		ORDER BY v.id_opartproductvideo
		';
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	}
	
	public function getVideoInfo($url=false){
	    $url=($url!=false)?$url:$this->link;
		if(preg_match("/youtube/i",$url))            
			return "youtube";
	    else if(preg_match("/dailymotion/i",$url))   
	    	return "dailymotion";
	    else if(preg_match("/vimeo/i",$url))         
	    	return "vimeo";
	}
	
	public function getYoutubeId($url=false) {
		$url=($url!=false)?$url:$this->link;
		return substr($url, strpos($url,"v=")+2,strlen($url)); 
	}
	
	public function getDailymotionId($url=false) {
		$url=($url!=false)?$url:$this->link;
		return substr($url, strpos($url,"video/")+6,strpos($url,"_"));
	}
	
	public function getVimeoId($url=false) {
		$url=($url!=false)?$url:$this->link;
		return substr($url, strpos($url,"vimeo.com/")+10,strlen($url));
	}
}