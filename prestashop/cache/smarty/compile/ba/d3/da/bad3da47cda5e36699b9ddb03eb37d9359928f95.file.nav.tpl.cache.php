<?php /* Smarty version Smarty-3.1.19, created on 2014-10-15 23:48:07
         compiled from "/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1229893787543eeb97731e81-33905344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bad3da47cda5e36699b9ddb03eb37d9359928f95' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/blockcontact/nav.tpl',
      1 => 1413409605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229893787543eeb97731e81-33905344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543eeb977d23c2_01265670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543eeb977d23c2_01265670')) {function content_543eeb977d23c2_01265670($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
