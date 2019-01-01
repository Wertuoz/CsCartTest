<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:15
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/static_templates/copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4512560445c236b6ff0d604-86693748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789bbc935718b04f11aa5d3102e84eecddcb1029' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/static_templates/copyright.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4512560445c236b6ff0d604-86693748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b6ff2f3e8_17976073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b6ff2f3e8_17976073')) {function content_5c236b6ff2f3e8_17976073($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php }
echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'ISO-8859-1');?>
. &nbsp;<?php echo $_smarty_tpl->__('developer');?>
</p><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php }
echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'ISO-8859-1');?>
. &nbsp;<?php echo $_smarty_tpl->__('developer');?>
</p><?php }?><?php }} ?>
