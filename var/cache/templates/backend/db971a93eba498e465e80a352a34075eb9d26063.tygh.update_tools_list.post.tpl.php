<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15980585115c27f676e35131-11127027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db971a93eba498e465e80a352a34075eb9d26063' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_tools_list.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15980585115c27f676e35131-11127027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'allow_convert_to_configurable_product' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f676e458b4_14704158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f676e458b4_14704158')) {function content_5c27f676e458b4_14704158($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.confirm_convert_to_configurable_product','product_variations.convert_to_configurable_product','product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_SIMPLE")&&(($tmp = @$_smarty_tpl->tpl_vars['allow_convert_to_configurable_product']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("product_variations.confirm_convert_to_configurable_product")),'text'=>$_smarty_tpl->__("product_variations.convert_to_configurable_product"),'href'=>"product_variations.convert?product_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"cm-confirm",'method'=>"POST"));?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'ISO-8859-1');
$_tmp7=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&product_type=".$_tmp7));?>
</li>
<?php }?>
<?php }} ?>
