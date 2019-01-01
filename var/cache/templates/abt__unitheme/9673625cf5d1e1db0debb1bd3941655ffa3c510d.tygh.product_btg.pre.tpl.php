<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:51
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/product_btg.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1400573355c236c835ddb60-48325025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9673625cf5d1e1db0debb1bd3941655ffa3c510d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/product_btg.pre.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1400573355c236c835ddb60-48325025',
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
  'unifunc' => 'content_5c236c835f0229_27107288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c835f0229_27107288')) {function content_5c236c835f0229_27107288($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme/hooks/products/components/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_scroll'=>true), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/products/product_btg.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/products/product_btg.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme/hooks/products/components/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_scroll'=>true), 0);
}?><?php }} ?>
