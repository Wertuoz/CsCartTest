<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:45
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12181102295bc9361ddbbb69-74722322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1659e156174a1fd634fd4825f435a8a57b68814' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12181102295bc9361ddbbb69-74722322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc9361ddc2918_47926489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc9361ddc2918_47926489')) {function content_5bc9361ddc2918_47926489($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
