<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 06:00:14
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/products/add_to_cart_but_id.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4748899355bc948be8babb8-03624820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566b94d9824a68f1588c73654b305b27e2ba9fae' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/addons/product_variations/hooks/products/add_to_cart_but_id.post.tpl',
      1 => 1539840993,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4748899355bc948be8babb8-03624820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc948be8d7b61_48598558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc948be8d7b61_48598558')) {function content_5bc948be8d7b61_48598558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['_but_id'] = new Smarty_variable("button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['_but_id'] = clone $_smarty_tpl->tpl_vars['_but_id'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['_but_id'] = new Smarty_variable("button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['_but_id'] = clone $_smarty_tpl->tpl_vars['_but_id'];?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart_but_id.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/add_to_cart_but_id.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['_but_id'] = new Smarty_variable("button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['_but_id'] = clone $_smarty_tpl->tpl_vars['_but_id'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['_but_id'] = new Smarty_variable("button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['_but_id'] = clone $_smarty_tpl->tpl_vars['_but_id'];?>
<?php }
}?><?php }} ?>
