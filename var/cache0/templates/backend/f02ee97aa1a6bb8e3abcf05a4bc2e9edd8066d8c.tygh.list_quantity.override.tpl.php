<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:04
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8215046515c006bf08c2cc8-75402651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '8215046515c006bf08c2cc8-75402651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf08cc7d1_84326757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf08cc7d1_84326757')) {function content_5c006bf08cc7d1_84326757($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'ISO-8859-1');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp4,'but_role'=>"edit"), 0);?>

<?php }?><?php }} ?>
