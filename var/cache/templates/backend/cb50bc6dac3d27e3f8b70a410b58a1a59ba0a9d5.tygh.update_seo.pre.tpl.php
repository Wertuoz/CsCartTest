<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:29
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10004558585c27f67573f970-94345981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb50bc6dac3d27e3f8b70a410b58a1a59ba0a9d5' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10004558585c27f67573f970-94345981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_uri' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f675748338_16840493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f675748338_16840493')) {function content_5c27f675748338_16840493($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['view_uri']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>
