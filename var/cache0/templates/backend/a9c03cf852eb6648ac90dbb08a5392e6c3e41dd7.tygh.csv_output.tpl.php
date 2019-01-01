<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 02:18:03
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/exim/components/csv_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10350236185c0073ab7c4628-73203776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9c03cf852eb6648ac90dbb08a5392e6c3e41dd7' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10350236185c0073ab7c4628-73203776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c0073ab7d2852_44789376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0073ab7d2852_44789376')) {function content_5c0073ab7d2852_44789376($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['value']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||!empty($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
        <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
    <?php }?>
</select><?php }} ?>
