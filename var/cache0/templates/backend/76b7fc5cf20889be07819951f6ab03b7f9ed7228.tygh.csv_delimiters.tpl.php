<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:51
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6084479815c006c1f752bb4-72534978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b7fc5cf20889be07819951f6ab03b7f9ed7228' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6084479815c006c1f752bb4-72534978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'allow_auto_detect' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006c1f764ae4_29511930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006c1f764ae4_29511930')) {function content_5c006c1f764ae4_29511930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('auto','semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['allow_auto_detect']->value) {?>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO")) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("auto");?>
</option>
    <?php }?>
    <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
    <option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select>
<?php }} ?>
