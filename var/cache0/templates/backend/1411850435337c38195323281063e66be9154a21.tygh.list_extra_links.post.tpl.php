<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:04
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2749888145c006bf0a4ed31-26205580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1411850435337c38195323281063e66be9154a21' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2749888145c006bf0a4ed31-26205580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf0a56091_63387931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf0a56091_63387931')) {function content_5c006bf0a56091_63387931($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'ISO-8859-1');
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp5));?>
</li>
<?php }?><?php }} ?>
