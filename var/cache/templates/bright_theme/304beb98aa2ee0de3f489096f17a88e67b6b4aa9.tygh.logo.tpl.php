<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 04:53:21
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/blocks/static_templates/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20649602655bc7e791692701-99307538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '304beb98aa2ee0de3f489096f17a88e67b6b4aa9' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/blocks/static_templates/logo.tpl',
      1 => 1539825832,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20649602655bc7e791692701-99307538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc7e7916aed07_23449179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7e7916aed07_23449179')) {function content_5bc7e7916aed07_23449179($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="ty-logo-container__image" />
    </a>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="ty-logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="ty-logo-container__image" />
    </a>
</div><?php }?><?php }} ?>
