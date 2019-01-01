<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:18
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16096997845c006cb2367892-99823258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '16096997845c006cb2367892-99823258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006cb236e308_52161552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cb236e308_52161552')) {function content_5c006cb236e308_52161552($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_product_variations_form"), 0);?>

<?php }?>
<?php }} ?>
