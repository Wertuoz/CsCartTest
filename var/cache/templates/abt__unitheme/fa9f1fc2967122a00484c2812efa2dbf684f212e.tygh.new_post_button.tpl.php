<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:17:57
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10365372395c27f2955b39c0-43941810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa9f1fc2967122a00484c2812efa2dbf684f212e' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post_button.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10365372395c27f2955b39c0-43941810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_container' => 0,
    'locate_to_review_tab' => 0,
    'config' => 0,
    'auth' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'object_type' => 0,
    'return_current_url' => 0,
    'style' => 0,
    'but_id' => 0,
    'target_id' => 0,
    'but_href' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f29561e915_18107830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f29561e915_18107830')) {function content_5c27f29561e915_18107830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('write_review','write_review','sign_in','sign_in','write_review','write_review','sign_in','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
<div class="ty-discussion-post__buttons buttons-container">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_review_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode((fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion#discussion"))), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("discussion.get_new_post_form?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value=="text") {?>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("write_review");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("write_review"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

    <?php }?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_discussion_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_discussion_post_login_form_popup", null, 0);?>

    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("discussion.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value=="text") {?>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-discussion__review-write" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("sign_in");?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
    <?php } else { ?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/new_post_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/new_post_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
<div class="ty-discussion-post__buttons buttons-container">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_review_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode((fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion#discussion"))), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("discussion.get_new_post_form?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value=="text") {?>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("write_review");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("write_review"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

    <?php }?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_discussion_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_discussion_post_login_form_popup", null, 0);?>

    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("discussion.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value=="text") {?>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-discussion__review-write" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("sign_in");?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
    <?php } else { ?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
</div>
<?php }?>
<?php }?><?php }} ?>
