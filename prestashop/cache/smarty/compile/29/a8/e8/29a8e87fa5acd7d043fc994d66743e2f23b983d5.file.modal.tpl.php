<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 19:51:39
         compiled from "/Users/Drapple/Desktop/www/prestashop/admin2027/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163747898554381cab66b6d5-15095959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a8e87fa5acd7d043fc994d66743e2f23b983d5' => 
    array (
      0 => '/Users/Drapple/Desktop/www/prestashop/admin2027/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163747898554381cab66b6d5-15095959',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54381cab696cc8_68075252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54381cab696cc8_68075252')) {function content_54381cab696cc8_68075252($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
