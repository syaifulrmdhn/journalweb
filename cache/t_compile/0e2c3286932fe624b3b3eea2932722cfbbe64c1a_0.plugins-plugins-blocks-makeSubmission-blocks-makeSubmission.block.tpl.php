<?php
/* Smarty version 3.1.33, created on 2020-02-27 06:37:49
  from 'plugins-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5763bd7ca227_69365586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2c3286932fe624b3b3eea2932722cfbbe64c1a' => 
    array (
      0 => 'plugins-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl',
      1 => 1575681988,
      2 => 'plugins-plugins-blocks-makeSubmission-blocks-makeSubmission',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5763bd7ca227_69365586 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_make_submission">
	<div class="content">
		<a class="block_make_submission_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

		</a>
	</div>
</div>
<?php }
}
