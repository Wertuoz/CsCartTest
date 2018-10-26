<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:45
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4295912195bc9361d73dc73-86603156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4fe94019382fe37ab2a9229b809cf131016065' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4295912195bc9361d73dc73-86603156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc9361d7457b8_99541372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc9361d7457b8_99541372')) {function content_5bc9361d7457b8_99541372($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("max_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
