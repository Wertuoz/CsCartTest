<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:36
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/hooks/block_manager_update_grid/settings.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13284711645c254bfce80f40-91204303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed640a459f0b5598470513376f2fa43d0c714f13' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/hooks/block_manager_update_grid/settings.pre.tpl',
      1 => 1545824810,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13284711645c254bfce80f40-91204303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'runtime' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254bfcea6eb0_90414208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254bfcea6eb0_90414208')) {function content_5c254bfcea6eb0_90414208($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('full_width','original','extender','full_extender','ab__grid_tabs.ab__show_in_tabs','ab__grid_tabs.ab__use_ajax'));
?>



<?php if (!$_smarty_tpl->tpl_vars['grid']->value['parent_id']&&($_smarty_tpl->tpl_vars['grid']->value['width']+$_smarty_tpl->tpl_vars['grid']->value['offset']>=$_smarty_tpl->tpl_vars['runtime']->value['layout']['width'])) {?>
<div class="control-group cm-no-hide-input">
<label class="control-label" for="ext_grid_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("full_width");?>
</label>
<div class="controls">
<select id="ext_grid_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="extended">
<option value="O" <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("original");?>
</option>
<option value="E" <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="E") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("extender");?>
</option>
<option value="F" <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("full_extender");?>
</option>
</select>
</div>
</div>
<?php }?>



<div class="control-group cm-no-hide-input">
<label class="control-label" for="elm_grid_ab__show_in_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__grid_tabs.ab__show_in_tabs");?>
</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="ab__show_in_tabs" value="N" />
<input id="elm_grid_ab__show_in_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" class="cm-no-hide-input" name="ab__show_in_tabs" value="Y" <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>checked<?php }?> />
</div>
</div>
<div class="control-group cm-no-hide-input">
<label class="control-label" for="elm_grid_ab__use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__grid_tabs.ab__use_ajax");?>
</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="ab__use_ajax" value="N" />
<input id="elm_grid_ab__use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" class="cm-no-hide-input" name="ab__use_ajax" value="Y" <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__use_ajax']=='Y') {?>checked<?php }?> />
</div>
</div>
<?php }} ?>
