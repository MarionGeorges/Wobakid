<?php /* Smarty version Smarty-3.1.19, created on 2014-10-15 23:48:05
         compiled from "/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810810497543eeb95350440-68434444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1bf1aa86716b6d1bff9ed0eea94c80f6e386d8' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/themes/ChildTheme/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1413409605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810810497543eeb95350440-68434444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543eeb9537b728_02312252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543eeb9537b728_02312252')) {function content_543eeb9537b728_02312252($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
