<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 04:53:22
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/index/footer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14089497315bc7e792c1a540-86575121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05adb99283e56dbd1ebd9aa840c65d9eaf6268b' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/index/footer.post.tpl',
      1 => 1539827464,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14089497315bc7e792c1a540-86575121',
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
  'unifunc' => 'content_5bc7e792c2c768_84063938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7e792c2c768_84063938')) {function content_5bc7e792c2c768_84063938($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><noscript><div><img src="//mc.yandex.ru/watch/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_yandex_metrika/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_yandex_metrika/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><noscript><div><img src="//mc.yandex.ru/watch/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php }?><?php }} ?>
