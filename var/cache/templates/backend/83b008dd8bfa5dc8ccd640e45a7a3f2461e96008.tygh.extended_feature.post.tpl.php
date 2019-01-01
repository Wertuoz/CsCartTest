<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:04:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12541354885c254c503fcaa3-75553825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b008dd8bfa5dc8ccd640e45a7a3f2461e96008' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12541354885c254c503fcaa3-75553825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_type' => 0,
    'runtime' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c50405be6_11649966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c50405be6_11649966')) {function content_5c254c50405be6_11649966($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::EXTENDED")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR"))) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0);?>

<?php }?><?php }} ?>
