<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:48
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17708546805c236c801d5855-25736321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35f7d3c8f5fd63d52b1b4274640f7f3fdaae128b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17708546805c236c801d5855-25736321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'capture_options_vs_qty' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c801f8597_31855039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c801f8597_31855039')) {function content_5c236c801f8597_31855039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('supplier','supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'ISO-8859-1');?>
</a></span>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/suppliers/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/suppliers/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'ISO-8859-1');?>
</a></span>
    </div>
<?php }
}?><?php }} ?>
