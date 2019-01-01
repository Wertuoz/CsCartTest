<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10009797175c27f6761817b7-30336195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5243036d76b5df0e4ee2a192f4a566893ab2111d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10009797175c27f6761817b7-30336195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'features_search' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f67618ff01_26417365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f67618ff01_26417365')) {function content_5c27f67618ff01_26417365($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_features']->value) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value), 0);?>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
