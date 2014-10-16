<?php /* Smarty version Smarty-3.1.19, created on 2014-10-15 23:48:06
         compiled from "/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1459865027543eeb961b1f58-14266176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67ccdff24832051bd8d094c1feb648ad369d1b5' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/homefeatured/homefeatured.tpl',
      1 => 1413409605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1459865027543eeb961b1f58-14266176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543eeb961f7351_73719139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543eeb961f7351_73719139')) {function content_543eeb961f7351_73719139($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
