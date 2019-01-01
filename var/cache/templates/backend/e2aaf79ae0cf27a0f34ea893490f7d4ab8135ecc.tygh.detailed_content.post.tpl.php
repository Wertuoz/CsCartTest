<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:55
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20169435505c2765f3c37a30-34946572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2aaf79ae0cf27a0f34ea893490f7d4ab8135ecc' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20169435505c2765f3c37a30-34946572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f3c3e887_27325579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f3c3e887_27325579')) {function content_5c2765f3c3e887_27325579($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['page_data']->value,'object_name'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"a"), 0);?>

<?php }?><?php }} ?>
