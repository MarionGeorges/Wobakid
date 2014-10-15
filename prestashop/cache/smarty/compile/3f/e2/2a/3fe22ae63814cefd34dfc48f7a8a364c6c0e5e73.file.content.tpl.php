<?php /* Smarty version Smarty-3.1.19, created on 2014-10-14 17:11:08
         compiled from "/Users/Drapple/Desktop/www/prestashop/admin0/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65415796543d3d0c3b4606-11022050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe22ae63814cefd34dfc48f7a8a364c6c0e5e73' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/admin0/themes/default/template/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65415796543d3d0c3b4606-11022050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543d3d0c3e9c17_39884074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d3d0c3e9c17_39884074')) {function content_543d3d0c3e9c17_39884074($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
