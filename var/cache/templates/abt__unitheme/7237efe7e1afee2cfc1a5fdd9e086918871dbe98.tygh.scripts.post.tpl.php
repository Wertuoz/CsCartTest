<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:17
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickpoint/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20322766085c236b711321e2-61019486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7237efe7e1afee2cfc1a5fdd9e086918871dbe98' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickpoint/hooks/index/scripts.post.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20322766085c236b711321e2-61019486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b71144a13_55054696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b71144a13_55054696')) {function content_5c236b71144a13_55054696($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/rus_pickpoint/func.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_pickpoint/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_pickpoint/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/rus_pickpoint/func.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
