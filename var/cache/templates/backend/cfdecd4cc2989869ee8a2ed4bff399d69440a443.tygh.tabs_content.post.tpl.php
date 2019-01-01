<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14534262715c27f676a38498-29035319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfdecd4cc2989869ee8a2ed4bff399d69440a443' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14534262715c27f676a38498-29035319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f676a3c334_16467190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f676a3c334_16467190')) {function content_5c27f676a3c334_16467190($_smarty_tpl) {?><div class="hidden" id="content_required_products">

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"required_products",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'type'=>"links",'placement'=>"right"), 0);?>


</div><?php }} ?>
