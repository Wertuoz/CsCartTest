<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:16
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10947971615c236b70f0afa1-84152952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c077658f0ba4cca6dca15bcbcff6dba2d9a7394' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10947971615c236b70f0afa1-84152952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b70f2ef37_95220267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b70f2ef37_95220267')) {function content_5c236b70f2ef37_95220267($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('ab__dotd.more','ab__dotd.less','ab__dotd.more','ab__dotd.less'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'ISO-8859-1');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'ISO-8859-1');?>
',max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',more: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',less: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'ISO-8859-1');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'ISO-8859-1');?>
',max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',more: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',less: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }?><?php }} ?>