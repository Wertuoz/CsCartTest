<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:15
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17254141365c006cafc0a329-40736522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686c4317fc0eae7e389ff66bad40bee1fd033f8a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17254141365c006cafc0a329-40736522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006cafc0fbc0_31999436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cafc0fbc0_31999436')) {function content_5c006cafc0fbc0_31999436($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
