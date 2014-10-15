<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 19:53:53
         compiled from "/Users/Drapple/Desktop/www/prestashop/admin2027/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185093911354381d316032e1-73775693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b452c3e82df2be26a04e64a2049d2cc9b198f6e5' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/admin2027/themes/default/template/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185093911354381d316032e1-73775693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54381d31621f06_95511054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54381d31621f06_95511054')) {function content_54381d31621f06_95511054($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
