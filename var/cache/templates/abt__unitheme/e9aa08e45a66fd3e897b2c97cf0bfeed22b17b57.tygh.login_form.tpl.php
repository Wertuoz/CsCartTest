<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:39:27
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/discussion/views/discussion/components/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19873103865c27f79f27e550-08295580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9aa08e45a66fd3e897b2c97cf0bfeed22b17b57' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/discussion/views/discussion/components/login_form.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19873103865c27f79f27e550-08295580',
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
  'unifunc' => 'content_5c27f79f29e4f7_08107567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f79f29e4f7_08107567')) {function content_5c27f79f29e4f7_08107567($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('sign_in','discussion.please_log_in_to_write_a_review','sign_in','discussion.please_log_in_to_write_a_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="new_discussion_post_login_form_popup" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3><?php echo $_smarty_tpl->__("discussion.please_log_in_to_write_a_review");?>
</h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup"), 0);?>

    </div>
<!--new_discussion_post_login_form_popup--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="new_discussion_post_login_form_popup" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3><?php echo $_smarty_tpl->__("discussion.please_log_in_to_write_a_review");?>
</h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup"), 0);?>

    </div>
<!--new_discussion_post_login_form_popup--></div>
<?php }?><?php }} ?>