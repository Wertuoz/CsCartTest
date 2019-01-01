<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:40:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631123955bfbbf70c861b0-08447824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03594388c5b3f5f805f3a3b31a5189bd567f0b1' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1631123955bfbbf70c861b0-08447824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbbf70c8b9b6_56748512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbbf70c8b9b6_56748512')) {function content_5bfbbf70c8b9b6_56748512($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
