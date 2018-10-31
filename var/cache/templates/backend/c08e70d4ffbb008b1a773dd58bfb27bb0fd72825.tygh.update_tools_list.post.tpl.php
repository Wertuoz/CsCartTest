<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 09:07:12
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20166426895bd7f5103756d3-44876537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08e70d4ffbb008b1a773dd58bfb27bb0fd72825' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20166426895bd7f5103756d3-44876537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd7f51037c944_47566176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd7f51037c944_47566176')) {function content_5bd7f51037c944_47566176($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('view_user_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }?><?php }} ?>
