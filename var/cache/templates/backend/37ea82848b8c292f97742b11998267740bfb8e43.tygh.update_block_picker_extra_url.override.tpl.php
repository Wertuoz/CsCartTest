<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:21:52
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15119559185c27f380063598-03712740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ea82848b8c292f97742b11998267740bfb8e43' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15119559185c27f380063598-03712740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f38006fb48_78771132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f38006fb48_78771132')) {function content_5c27f38006fb48_78771132($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)@constant('PAGE_TYPE_BLOG'))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'ISO-8859-1');?>
&page_type=<?php echo htmlspecialchars(@constant('PAGE_TYPE_BLOG'), ENT_QUOTES, 'ISO-8859-1');?>

<?php }?><?php }} ?>
