<?php

class AdminOpartproductvideoController extends ModuleAdminController
{
	public function __construct()
	{
		$this->bootstrap = true;
		$this->table = 'opartproductvideo';
		$this->className = 'Video';
		$this->lang = true;
		$this->deleted = false;
		$this->colorOnBackground = false;
		$this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected items'), 'confirm' => $this->l('Delete selected items?')));
		$this->context = Context::getContext();
		
		parent::__construct();
	}
	
	private function renderHeader() {
		
	}
	
	/**
	 * Function used to render the list to display for this controller
	 */
	public function renderList()
	{
		$this->addRowAction('edit');
		$this->addRowAction('delete');
		
		$this->bulk_actions = array(
			'delete' => array(
				'text' => $this->l('Delete selected items'),
				'confirm' => $this->l('Delete selected items?')
				)
			);
		$this->fields_list = array(
			'id_opartproductvideo' => array(
				'title' => $this->l('ID'),
				'align' => 'center',
				'width' => 25
			),
			'title' => array(
				'title' => $this->l('Title'),
				'width' => 'auto',
			),
			'link' => array(
				'title' => $this->l('Link'),
				'width' => 'auto',
			)				
		);
		
		$lists = parent::renderList();
		
		parent::initToolbar();
		$html="";
		$html.=$this->context->smarty->fetch(parent::getTemplatePath().'header.tpl');		
		$html.=$lists;
		$html.=$this->context->smarty->fetch(parent::getTemplatePath().'help.tpl');
		return $html;
	}
		
	public function renderForm()
	{
		if (!($obj = $this->loadObject(true)))
			return;
		
		$this->fields_form = array(
			'legend' => array(
				'title' => $this->l('Video'),
				'image' => '../img/admin/cog.gif',				
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Title:'),
					'name' => 'title',
					'size' => 50,
					'desc' => $this->l('The title is used only in admin')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Width:'),
					'name' => 'width',
					'size' => 10
				),
				array(
					'type' => 'text',
					'label' => $this->l('Height:'),
					'name' => 'height',
					'size' => 10
				),
				array(
					'type' => 'text',
					'lang' => true,
					'autoload_rte' => true,
					'label' => $this->l('Link:'),
					'name' => 'link',					
					'size' => 150,
					'desc' => $this->l('Copy the video url here. You can use youtube, dailymotion and wimeo video')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Public Title:'),
					'name' => 'publicTitle',
					'size' => 150,
					'lang' => true,
					'desc' => $this->l('This title is visible in front.')
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Description:'),
					'name' => 'desc',
					'autoload_rte' => true,
					'rows' => 10,
					'cols' => 102,
					'lang' => true,
					'desc' => $this->l('Your video\'s description')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Class name:'),
					'name' => 'className',
					'size' => 50,
					'desc' => $this->l('You can add a css class name (optional)')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Anchor name:'),
					'name' => 'anchorName',
					'size' => 50,
					'desc' => $this->l('You can add an anchor name (optional)')
				),
			),
			'selects' => array(
				'products' => $obj->getProducts(true),
				'products_unselected' => $obj->getProducts(false)
			),
					/*
				'selects' => array(
					'products' => $obj->getProducts(true),
					'products_unselected' => $obj->getProducts(false)
				)*/
			
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);	
		return parent::renderForm();
	}
	
	public function postProcess()
	{
		if (isset($_GET['delete'.$this->table])) 
			if (($id = (int)$_GET['id_opartproductvideo']) && ($obj = new $this->className($id)) && Validate::isLoadedObject($obj))
				$obj->deleteProductLink();
		
		if (($this->tabAccess['edit'] === '1') && Tools::getValue('submitAdd'.$this->table))
			if (($id = (int)Tools::getValue($this->identifier)) && ($obj = new $this->className($id)) && Validate::isLoadedObject($obj))
				$obj->setProducts($_POST['products']);
		return parent::postProcess();
	}
}