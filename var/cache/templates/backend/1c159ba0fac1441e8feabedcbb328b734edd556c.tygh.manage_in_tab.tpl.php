<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 13:01:58
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/views/block_manager/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20427061455bc85a167934b0-44506545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c159ba0fac1441e8feabedcbb328b734edd556c' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/views/block_manager/manage_in_tab.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20427061455bc85a167934b0-44506545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc85a167dffb0_14272888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85a167dffb0_14272888')) {function content_5bc85a167dffb0_14272888($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/modifier.count.php';
?><?php
fn_preload_lang_vars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value)>1) {?>
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("switch_layout");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0);?>

            </div>
        </div>
    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_blocks--></div><?php }} ?>
