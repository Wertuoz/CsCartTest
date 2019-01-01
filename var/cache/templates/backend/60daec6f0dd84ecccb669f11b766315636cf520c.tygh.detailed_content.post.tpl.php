<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:55
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9051069225c2765f3bb9bf0-59852779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60daec6f0dd84ecccb669f11b766315636cf520c' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9051069225c2765f3bb9bf0-59852779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f3bbec62_61009338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f3bbec62_61009338')) {function content_5c2765f3bbec62_61009338($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
