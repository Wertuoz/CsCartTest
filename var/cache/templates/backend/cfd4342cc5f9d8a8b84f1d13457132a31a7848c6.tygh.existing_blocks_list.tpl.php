<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:49
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4627007215c254c0920b070-17746763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd4342cc5f9d8a8b84f1d13457132a31a7848c6' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4627007215c254c0920b070-17746763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unique_blocks' => 0,
    'block' => 0,
    'block_types' => 0,
    'manage' => 0,
    'grid_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c092217d8_63806320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c092217d8_63806320')) {function content_5c254c092217d8_63806320($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('delete_block'));
?>
<?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unique_blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]) {?>
        <div class="select-block cm-add-block bm-action-existing-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>">
            <input type="hidden" name="block_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="grid_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['grid_id']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <a class="icon-remove-circle cm-tooltip cm-remove-block" title="<?php echo $_smarty_tpl->__("delete_block");?>
"></a>
            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
"></div>
            </div>
            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'ISO-8859-1', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]['description'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            </div>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
