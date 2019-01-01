<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:31
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258451575c27f6770f6917-35877976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6479209590f303b15c46e49fabea1dd94746c10' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '258451575c27f6770f6917-35877976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f6770fa847_44756844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f6770fa847_44756844')) {function content_5c27f6770fa847_44756844($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <div class="cm-hide-save-button hidden" id="content_variations"></div>
<?php }?>
<?php }} ?>
