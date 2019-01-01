<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:35
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15015747165c236f7fdcfa63-72497620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f02ee97aa1a6bb8e3abcf05a4bc2e9edd8066d8c' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/list_quantity.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15015747165c236f7fdcfa63-72497620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f7fdda8e1_75254829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f7fdda8e1_75254829')) {function content_5c236f7fdda8e1_75254829($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'ISO-8859-1');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp4,'but_role'=>"edit"), 0);?>

<?php }?><?php }} ?>
