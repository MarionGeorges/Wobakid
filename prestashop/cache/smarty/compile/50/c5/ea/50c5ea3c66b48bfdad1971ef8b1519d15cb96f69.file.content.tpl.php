<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 18:06:57
         compiled from "/Users/Drapple/Desktop/www/prestashop/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130679810454283221ecd294-75231725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c5ea3c66b48bfdad1971ef8b1519d15cb96f69' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130679810454283221ecd294-75231725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54283221eee7a9_81641135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54283221eee7a9_81641135')) {function content_54283221eee7a9_81641135($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
