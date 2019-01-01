<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:04:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18964378325c254c50202428-26506555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded603bb421cf0210f7fc8718d826aa76901cb16' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/buttons/clone_item.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18964378325c254c50202428-26506555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c502051e5_84195043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c502051e5_84195043')) {function content_5c254c502051e5_84195043($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></a>&nbsp;<?php }} ?>
