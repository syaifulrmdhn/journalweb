<?php
/* Smarty version 3.1.33, created on 2020-02-27 06:36:18
  from 'app:submissionformcategories.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5763623a1dd2_41554133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef1996850f75e89a53007d1a8243f48d8f4148f' => 
    array (
      0 => 'app:submissionformcategories.',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5763623a1dd2_41554133 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['hasCategories']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['readOnly']->value) {?>
		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.category.categories",'list'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"grid.category.categories",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignedCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"grid.category.categories",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
			<div id="categories-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
				<?php echo '<script'; ?>
 type="text/javascript">
					pkp.registry.init('categories-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SelectListPanel', <?php echo $_smarty_tpl->tpl_vars['selectCategoryListData']->value;?>
);
				<?php echo '</script'; ?>
>
			</div>
		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
}
