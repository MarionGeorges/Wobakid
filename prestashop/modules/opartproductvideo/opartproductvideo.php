<?php
// Security
if (!defined('_PS_VERSION_'))
	exit;

// Loading Models
require_once(_PS_MODULE_DIR_ . 'opartproductvideo/models/Video.php');

class Opartproductvideo extends Module
{
	public function __construct()
	{
		$this->name = 'opartproductvideo';
		$this->tab = 'front_office_features';
		$this->version = '14-06-02';
			
		$this->author = 'Op\'art - Olivier CLEMENCE';
		$this->need_instance = 0;
		//$this->module_key="4ddbc6f52446057f4f6ff71d96990358";
	
		parent::__construct();
	
		$this->displayName = $this->l('Op\'art product video');
		$this->description = $this->l('Add videos to your product pages');
	
		$this->confirmUninstall = $this->l('Are you sure you want to delete this module ?');
			
		if ($this->active && Configuration::get('OPART_PRODUCTVIDEO_CONF') == '')
			$this->warning = $this->l('You have to configure your module');
	}	
	
	public function install()
	{
		// Install SQL
		include(dirname(__FILE__).'/sql/install.php');
		foreach ($sql as $s)
			if (!Db::getInstance()->execute($s))
			return false;
	
		// Install Tabs
		$parent_tab = new Tab();
		$parent_tab->name = array();
		foreach (Language::getLanguages() as $language)
			$parent_tab->name[$language['id_lang']] = 'Videos';
		//$parent_tab->name = 'Op\'art ajax popup';
		$parent_tab->class_name = 'AdminMainOpartproductvideo';
		$parent_tab->id_parent = 0;
		$parent_tab->module = $this->name;
		$parent_tab->add();
	
	
		$tab1 = new Tab();
		$tab1->name = array();
		foreach (Language::getLanguages() as $language)
			$tab1->name[$language['id_lang']] = 'Manage videos';
		//$tab1->name = 'Popup';
		$tab1->class_name = 'AdminOpartproductvideo';
		$tab1->id_parent = $parent_tab->id;
		$tab1->module = $this->name;
		$tab1->add();
	
		//Init
		Configuration::updateValue('OPART_PRODUCTVIDEO_CONF', 'ok');
	
		// Install Module
		if (parent::install() == false OR !$this->installHook())
			return false;
		
		return true;
	}
	
	private function installHook() {
		if(version_compare(_PS_VERSION_, '1.6.0', '<')) {
			if(
				!$this->registerHook('displayProductTabContent')
				OR !$this->registerHook('displayProductTab')
			)
				return false;
			else
				return true;
		}
		else {
			if(
				!$this->registerHook('displayProductTabContent')
			)
				return false;
			else
				return true;
		}
	}
	
	public function uninstall()
	{
		// Uninstall SQL
		include(dirname(__FILE__).'/sql/uninstall.php');
		foreach ($sql as $s)
			if (!Db::getInstance()->execute($s))
			return false;
	
		Configuration::deleteByName('OPART_PRODUCTVIDEO_CONF');
	
		// Uninstall Tabs
		$tab = new Tab((int)Tab::getIdFromClassName('AdminMainOpartproductvideo'));
		$tab->delete();
	
		$tab = new Tab((int)Tab::getIdFromClassName('AdminOpartproductvideo'));
		$tab->delete();
	
		// Uninstall Module
		if (!parent::uninstall())
			return false;
		return true;
	}
	
	public function hookDisplayProductTab() {
		$obj=new Video;
		$id_product = (int)Tools::getValue('id_product');
		$resultArray=$obj->getVideoByProduct($id_product,$this->context->language->id);
		if(count($resultArray)>0) {
			$this->context->controller->addJS($this->_path.'js/script.js');
			return $this->display(__FILE__, 'opartproductvideotab_15.tpl');
		}
		return false;
	}
	
	public function hookDisplayProductTabContent()
	{
		$obj=new Video;
		$id_product = (int)Tools::getValue('id_product');
		$resultArray=$obj->getVideoByProduct($id_product,$this->context->language->id);
		if(count($resultArray)>0) {
			foreach($resultArray as $result) {
				$video=new Video;
				$video->width=$result['width'];
				$video->height=$result['height'];
				$video->title=$result['title'];
				$video->link=$result['link'];
				$video->publicTitle=$result['publicTitle'];
				$video->desc=$result['desc'];
				$video->className=$result['className'];
				$video->anchorName=$result['anchorName'];
				$objArray[]=$video;
			}			
			$this->smarty->assign(array(
				'result' => $objArray
			));
			$tplFile=(version_compare(_PS_VERSION_, '1.6.0', '<'))?'opartproductvideo_15.tpl':'opartproductvideo.tpl';				
			return $this->display(__FILE__,$tplFile);
		}
		return false;
	}
	
	public function getContent()
	{
		$this->_html=$this->display(__FILE__, 'views/templates/admin/configure.tpl');
		return $this->_html;
	}
}
?>