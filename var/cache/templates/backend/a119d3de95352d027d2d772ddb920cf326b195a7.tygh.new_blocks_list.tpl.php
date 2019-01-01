<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:49
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/block_manager/components/new_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1865248175c254c091f29a9-46944617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a119d3de95352d027d2d772ddb920cf326b195a7' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/block_manager/components/new_blocks_list.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1865248175c254c091f29a9-46944617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_types' => 0,
    'block' => 0,
    'manage' => 0,
    'type' => 0,
    'grid_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c09205489_02154669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c09205489_02154669')) {function content_5c254c09205489_02154669($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["block"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['is_manageable']) {?>
        <div class="select-block cm-add-block bm-action-new-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?>">
            <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="block_data[grid_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
"></div>
            </div>

            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'ISO-8859-1', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            </div>
        </div>
    <?php }?>
<?php } ?><?php }} ?>
