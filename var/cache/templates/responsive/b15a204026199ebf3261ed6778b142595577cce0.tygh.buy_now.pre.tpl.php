<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 06:00:14
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/products/buy_now.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17239261215bc948bec29e49-33573250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15a204026199ebf3261ed6778b142595577cce0' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/products/buy_now.pre.tpl',
      1 => 1539840993,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17239261215bc948bec29e49-33573250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc948bec43139_79364153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc948bec43139_79364153')) {function content_5bc948bec43139_79364153($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['compare_product_id'] = clone $_smarty_tpl->tpl_vars['compare_product_id'];?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/buy_now.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/buy_now.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['compare_product_id'] = clone $_smarty_tpl->tpl_vars['compare_product_id'];?>
<?php }
}?><?php }} ?>