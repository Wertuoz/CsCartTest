<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 05:25:55
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591653935bc940b362d250-09199055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34b1261f591403a839aa897248a473363599569' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_tools_list.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1591653935bc940b362d250-09199055',
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
  'unifunc' => 'content_5bc940b36b3174_06223547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc940b36b3174_06223547')) {function content_5bc940b36b3174_06223547($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.confirm_convert_to_configurable_product','product_variations.convert_to_configurable_product','product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_SIMPLE")&&(($tmp = @$_smarty_tpl->tpl_vars['allow_convert_to_configurable_product']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("product_variations.confirm_convert_to_configurable_product")),'text'=>$_smarty_tpl->__("product_variations.convert_to_configurable_product"),'href'=>"product_variations.convert?product_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"cm-confirm",'method'=>"POST"));?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&product_type=".$_tmp1));?>
</li>
<?php }?>
<?php }} ?>
