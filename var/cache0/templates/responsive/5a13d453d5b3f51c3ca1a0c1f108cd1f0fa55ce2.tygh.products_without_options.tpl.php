<?php /* Smarty version Smarty-3.1.21, created on 2018-11-28 15:21:33
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/blocks/product_list_templates/products_without_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5546971885bfe884d64a503-45485060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a13d453d5b3f51c3ca1a0c1f108cd1f0fa55ce2' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/blocks/product_list_templates/products_without_options.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5546971885bfe884d64a503-45485060',
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
  'unifunc' => 'content_5bfe884d66d080_66259875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfe884d66d080_66259875')) {function content_5bfe884d66d080_66259875($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>false,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/products_without_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/products_without_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>false,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action"), 0);
}?><?php }} ?>
