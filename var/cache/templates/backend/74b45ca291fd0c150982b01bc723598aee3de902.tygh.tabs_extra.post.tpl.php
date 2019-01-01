<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:56
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1924246755c2765f4365ee0-67949420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b45ca291fd0c150982b01bc723598aee3de902' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1924246755c2765f4365ee0-67949420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f436b3f5_83520751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f436b3f5_83520751')) {function content_5c2765f436b3f5_83520751($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
