<?php
/* Smarty version 3.1.33, created on 2020-02-27 06:37:24
  from 'app:authorDashboardauthorDash' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5763a4429cb5_79197298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242d18fd85c62857d843c6ceeeba446f98b58766' => 
    array (
      0 => 'app:authorDashboardauthorDash',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 3,
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e5763a4429cb5_79197298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('primaryAuthor', $_smarty_tpl->tpl_vars['submission']->value->getPrimaryAuthor());
if (!$_smarty_tpl->tpl_vars['primaryAuthor']->value) {
$_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['submission']->value->getAuthors());
$_smarty_tpl->_assignInScope('primaryAuthor', $_smarty_tpl->tpl_vars['authors']->value[0]);
}
$_smarty_tpl->_assignInScope('submissionTitleSafe', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle() )));
if ($_smarty_tpl->tpl_vars['primaryAuthor']->value) {
$_smarty_tpl->_assignInScope('pageTitleTranslated', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['primaryAuthor']->value->getFullName(),", ",$_smarty_tpl->tpl_vars['submissionTitleSafe']->value )));
} else {
$_smarty_tpl->_assignInScope('pageTitleTranslated', $_smarty_tpl->tpl_vars['submissionTitleSafe']->value);
}
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suppressPageTitle'=>true), 0, false);
?>

<div id="submissionWorkflow" class="pkp_submission_workflow">

	<div id="submissionHeader" class="pkp_page_header">
		<div class="pkp_page_title">
			<h1 class="pkp_submission_title">
				<span class="pkp_screen_reader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submissionTitle"),$_smarty_tpl ) );?>
</span>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle() ));?>

			</h1>
			<div class="pkp_submission_author">
				<span class="pkp_screen_reader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.role.author_s"),$_smarty_tpl ) );?>
</span>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getAuthorString() ));?>

			</div>
			<ul class="pkp_submission_actions">
				<?php if ($_smarty_tpl->tpl_vars['uploadFileAction']->value) {?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadFileAction']->value,'contextId'=>"authorDashboard"), 0, false);
?>
					</li>
				<?php }?>
				<li>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['submissionLibraryAction']->value,'contextId'=>"authorDashboard"), 0, true);
?>
				</li>
				<li>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['viewMetadataAction']->value,'contextId'=>"authorDashboard"), 0, true);
?>
				</li>
			</ul>
		</div>
	</div>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"authorDashboardNotification",'requestOptions'=>$_smarty_tpl->tpl_vars['authorDashboardNotificationRequestOptions']->value), 0, false);
?>

	<?php $_smarty_tpl->_assignInScope('selectedTabIndex', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workflowStages']->value, 'stage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stage']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['stage']->value['id'] < $_smarty_tpl->tpl_vars['submission']->value->getStageId()) {?>
			<?php $_smarty_tpl->_assignInScope('selectedTabIndex', $_smarty_tpl->tpl_vars['selectedTabIndex']->value+1);?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php echo '<script'; ?>
 type="text/javascript">
		// Attach the JS file tab handler.
		$(function() {
			$('#stageTabs').pkpHandler(
				'$.pkp.controllers.tab.workflow.WorkflowTabHandler',
				{
					selected: <?php echo $_smarty_tpl->tpl_vars['selectedTabIndex']->value;?>
,
					emptyLastTab: true
				}
			);
		});
	<?php echo '</script'; ?>
>
	<div id="stageTabs" class="pkp_controllers_tab">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workflowStages']->value, 'stage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stage']->value) {
?>
				<li class="pkp_workflow_<?php echo $_smarty_tpl->tpl_vars['stage']->value['path'];?>
 stageId<?php echo $_smarty_tpl->tpl_vars['stage']->value['id'];
if ($_smarty_tpl->tpl_vars['stage']->value['statusKey']) {?> initiated<?php }?>">
					<a name="stage-<?php echo $_smarty_tpl->tpl_vars['stage']->value['path'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['stage']->value['path'];?>
 stageId<?php echo $_smarty_tpl->tpl_vars['stage']->value['id'];?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.authorDashboard.AuthorDashboardTabHandler",'op'=>"fetchTab",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stage']->value['id'],'escape'=>false),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stage']->value['translationKey']),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['stage']->value['statusKey']) {?>
							<span class="pkp_screen_reader">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stage']->value['statusKey']),$_smarty_tpl ) );?>

							</span>
						<?php }?>
					</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
