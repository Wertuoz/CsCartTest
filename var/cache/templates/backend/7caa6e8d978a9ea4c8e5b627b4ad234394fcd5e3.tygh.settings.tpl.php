<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 00:47:29
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/views/abt__ut/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4295875715c254871e173e3-40227396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7caa6e8d978a9ea4c8e5b627b4ad234394fcd5e3' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/views/abt__ut/settings.tpl',
      1 => 1545824810,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4295875715c254871e173e3-40227396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    's' => 0,
    'f_v' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254871e48596_09002853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254871e48596_09002853')) {function content_5c254871e48596_09002853($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('abt__ut.setting.','abt__ut.setting.','save','abt__ut.settings','abt__unitheme','abt__ut.settings'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="abt__unitheme_settings_form" id="abt__unitheme_settings_form">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']) {?>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="40%"><?php echo $_smarty_tpl->__('name');?>
</th>
<th width="60%"><?php echo $_smarty_tpl->__('value');?>
</th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
?>
<tr>
<td data-th="<?php echo $_smarty_tpl->__('name');?>
"><?php echo $_smarty_tpl->__("abt__ut.setting.".((string)$_smarty_tpl->tpl_vars['s']->value['name']));
ob_start();?><?php echo $_smarty_tpl->__("abt__ut.setting.".((string)$_smarty_tpl->tpl_vars['s']->value['name'])."__tooltip");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_tmp1), 0);?>
</td>
<td data-th="<?php echo $_smarty_tpl->__('value');?>
">
<?php $_smarty_tpl->tpl_vars['f_v'] = new Smarty_variable("abt__unitheme_data[".((string)$_smarty_tpl->tpl_vars['s']->value['name'])."]", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['s']->value['type']=='checkbox') {?>
<input type="hidden" value="N" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_v']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="checkbox" value="Y" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_v']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value['value']=='Y') {?>checked="checked"<?php }?>>
<?php } elseif ($_smarty_tpl->tpl_vars['s']->value['type']=='selectbox') {?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_v']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="span3">
<?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['s']->value['value']) {?>selected="selected"<?php }?>><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__($_tmp2);?>
</option>
<?php } ?>
</select>
<?php } elseif ($_smarty_tpl->tpl_vars['s']->value['type']=='input') {?>
<input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_v']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" class="span3">
<?php } elseif ($_smarty_tpl->tpl_vars['s']->value['type']=='textarea') {?>
<textarea name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_v']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="span3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
<?php }?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php }?>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>"submit-link",'but_name'=>"dispatch[abt__ut.update_settings]",'but_meta'=>"btn-primary",'but_target_form'=>"abt__unitheme_settings_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("abt__ut.settings"),'title_start'=>$_smarty_tpl->__("abt__unitheme"),'title_end'=>$_smarty_tpl->__("abt__ut.settings"),'select_languages'=>true,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
