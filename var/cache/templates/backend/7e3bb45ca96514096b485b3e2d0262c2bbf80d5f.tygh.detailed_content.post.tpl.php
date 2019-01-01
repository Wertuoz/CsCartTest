<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:12:08
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15415461585c237018248535-23134308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3bb45ca96514096b485b3e2d0262c2bbf80d5f' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/categories/detailed_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15415461585c237018248535-23134308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c237018250d63_65585627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c237018250d63_65585627')) {function content_5c237018250d63_65585627($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['category_data']->value,'object_name'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"c"), 0);?>

<?php }?><?php }} ?>
