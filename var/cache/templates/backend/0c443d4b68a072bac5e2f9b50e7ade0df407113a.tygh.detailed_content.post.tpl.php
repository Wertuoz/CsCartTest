<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:55
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8269687715c2765f3c45171-01852125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c443d4b68a072bac5e2f9b50e7ade0df407113a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8269687715c2765f3c45171-01852125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f3c4f615_98729892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f3c4f615_98729892')) {function content_5c2765f3c4f615_98729892($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0);?>

   <div id="discussion_page_setting" class="in collapse">
   		<fieldset>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PAGE"),'title'=>$_smarty_tpl->__("discussion_title_page"),'non_editable'=>true,'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['page_discussion_type']), 0);?>

   		</fieldset>
   </div>
<?php }?><?php }} ?>
