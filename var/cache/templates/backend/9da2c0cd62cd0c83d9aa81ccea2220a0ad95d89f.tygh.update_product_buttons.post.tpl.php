<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7243753225c27f676e525f7-53157498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9da2c0cd62cd0c83d9aa81ccea2220a0ad95d89f' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7243753225c27f676e525f7-53157498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f676e59098_44935230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f676e59098_44935230')) {function content_5c27f676e59098_44935230($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_product_variations_form"), 0);?>

<?php }?>
<?php }} ?>
