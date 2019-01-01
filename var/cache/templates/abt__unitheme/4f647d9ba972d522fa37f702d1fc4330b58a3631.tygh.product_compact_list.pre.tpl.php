<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:57:50
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/hooks/products/product_compact_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1571044825c236cbe17a112-79597942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f647d9ba972d522fa37f702d1fc4330b58a3631' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/hooks/products/product_compact_list.pre.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1571044825c236cbe17a112-79597942',
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
  'unifunc' => 'content_5c236cbe18b430_03858010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236cbe18b430_03858010')) {function content_5c236cbe18b430_03858010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/product_compact_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/product_compact_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
}?><?php }} ?>
