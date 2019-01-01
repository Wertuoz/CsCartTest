<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:55
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5960746905c2765f3e5dfb1-26090504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ed7e9ee264ae8b1477d85938b2d70e7271fe7d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/pages/tabs_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5960746905c2765f3e5dfb1-26090504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f3e66f60_74921519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f3e66f60_74921519')) {function content_5c2765f3e66f60_74921519($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['page_data']->value,'input_name'=>"page_data",'object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
