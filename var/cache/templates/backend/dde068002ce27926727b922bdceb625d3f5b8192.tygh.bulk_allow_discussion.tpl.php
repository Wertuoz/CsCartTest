<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 13:35:26
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/discussion/views/discussion_manager/components/bulk_allow_discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4149508405bc861ee02f2d3-52125305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde068002ce27926727b922bdceb625d3f5b8192' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/discussion/views/discussion_manager/components/bulk_allow_discussion.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4149508405bc861ee02f2d3-52125305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_id' => 0,
    'object_type' => 0,
    'prefix' => 0,
    'discussion_type_list' => 0,
    'discussion' => 0,
    'type' => 0,
    'type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc861ee03d3c9_52758078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc861ee03d3c9_52758078')) {function content_5bc861ee03d3c9_52758078($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['discussion'] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['discussion_type_list'] = new Smarty_variable(fn_discussion_get_discussion_types(), null, 0);?>

<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
][discussion_type]">
<?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discussion_type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
    <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==$_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
<?php } ?>
</select><?php }} ?>
