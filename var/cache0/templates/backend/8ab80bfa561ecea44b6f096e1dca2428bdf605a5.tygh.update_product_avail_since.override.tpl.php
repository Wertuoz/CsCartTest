<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:16
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1022804075c006cb033a1f4-24458383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab80bfa561ecea44b6f096e1dca2428bdf605a5' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1022804075c006cb033a1f4-24458383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006cb033f4e5_65148013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cb033f4e5_65148013')) {function content_5c006cb033f4e5_65148013($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
