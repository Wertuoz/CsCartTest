<?php /* Smarty version Smarty-3.1.21, created on 2018-11-27 13:21:34
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/call_requests/views/call_requests/request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3219332665bfd1aae68e200-59429236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd352982e4b4b2ce05726c166d79dc5850903e088' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/call_requests/views/call_requests/request.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3219332665bfd1aae68e200-59429236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'id' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfd1aae6b8751_90272283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd1aae6b8751_90272283')) {function content_5bfd1aae6b8751_90272283($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['id'] = new Smarty_variable("call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

<div class="hidden" title="<?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/views/call_requests/request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/views/call_requests/request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['id'] = new Smarty_variable("call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

<div class="hidden" title="<?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }?><?php }} ?>
