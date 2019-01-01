<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:17
         compiled from "/srv/www/esportshop.ru/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5179828325c006cb1626794-23937076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2752f817023c35cfb85d3e8a55923ee6d222371' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5179828325c006cb1626794-23937076',
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
  'unifunc' => 'content_5c006cb162a3f0_20750409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cb162a3f0_20750409')) {function content_5c006cb162a3f0_20750409($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></a>&nbsp;<?php }} ?>
