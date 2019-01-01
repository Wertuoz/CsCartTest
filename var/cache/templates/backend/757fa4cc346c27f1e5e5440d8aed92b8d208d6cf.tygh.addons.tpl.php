<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:49:21
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__addons_manager/views/ab__am/addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5272108545c236ac1035369-27856489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757fa4cc346c27f1e5e5440d8aed92b8d208d6cf' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__addons_manager/views/ab__am/addons.tpl',
      1 => 1545824644,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5272108545c236ac1035369-27856489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ab_addons' => 0,
    'a' => 0,
    'is_upd' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236ac10a9e47_70411466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236ac10a9e47_70411466')) {function content_5c236ac10a9e47_70411466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('ab__am_upd_text_msg_manager','no_data'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php if (isset($_smarty_tpl->tpl_vars['ab_addons']->value['list'])&&is_array($_smarty_tpl->tpl_vars['ab_addons']->value['list'])&&!empty($_smarty_tpl->tpl_vars['ab_addons']->value['list'])) {?><table width="100%" class="table table-sort table-middle ab_addons_list"><thead><tr><th width="1%">#</th><th width="1%">&nbsp;</th><th width="45%"><?php echo $_smarty_tpl->__('ab__am_addon_name');?>
</th><th class="center" width="6%"><?php echo $_smarty_tpl->__('ab__am_current_version');?>
</th><th class="center" width="20%"><?php echo $_smarty_tpl->__('ab__am_updates');?>
</th><th class="center" width="6%"><?php echo $_smarty_tpl->__('ab__am_actions');?>
</th></tr></thead><?php  $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["a"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab_addons']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["a"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["a"]->key => $_smarty_tpl->tpl_vars["a"]->value) {
$_smarty_tpl->tpl_vars["a"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["a"]['iteration']++;
$_smarty_tpl->tpl_vars["is_upd"] = new Smarty_variable("N", null, 0);
if (isset($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv'])&&!empty($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv'])&&is_array($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv'])) {
$_smarty_tpl->tpl_vars["is_upd"] = new Smarty_variable("Y", null, 0);
}?><tbody><tr><td style="vertical-align: top"><small><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['a']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
</small></td><td style="vertical-align: top"><div class="ab_logo"></div></td><td><div class="ab-md-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div><p><?php echo $_smarty_tpl->tpl_vars['a']->value['description'];?>
</p></td><td class="center">v<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['version'], ENT_QUOTES, 'ISO-8859-1');?>
</td><td class="center"><?php if ($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['s']=='Error') {?><span class="ab_addon_no_upd"><?php echo $_smarty_tpl->__('ab__am_upd_error');?>
</span><?php } else {
if ($_smarty_tpl->tpl_vars['is_upd']->value=="N") {?><span class="type_of_update_No"><?php echo $_smarty_tpl->__('ab__am_upd_actual');?>
</span><?php } else {
if ($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['p']=='N') {?><span class="type_of_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['p'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__('ab__am_upd_general');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['p']=='M') {?><span class="type_of_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['p'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__('ab__am_upd_mandatory');?>
</span><?php }?><br><small>v<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['v'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__('ab__am_built_on');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['t']),"%d-%b-%Y"), ENT_QUOTES, 'ISO-8859-1');?>
</small><?php }
}
if ($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['ss']=='E'&&$_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['sd']>0) {?><br><small class="subscription"><?php echo $_smarty_tpl->__('ab__am_updates_are_available');?>
<br><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['sd'],"%d-%b-%Y"), ENT_QUOTES, 'ISO-8859-1');?>
</small><?php } elseif ($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['ss']=='D') {?><br><small class="subscription"><?php echo $_smarty_tpl->__('ab__am_subscribe_to_updates_has_expired');?>
<br><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['sd'],"%d-%b-%Y"), ENT_QUOTES, 'ISO-8859-1');?>
</small><?php }?></td><td class="center"><?php if ($_smarty_tpl->tpl_vars['is_upd']->value=="Y"&&($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['ss']=='E'||$_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['ss']=='I')) {
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__('ab__am_button_update'),'but_role'=>"button",'but_onclick'=>"var ui="."$"."(this).parent().parent().next(); if(ui.hasClass('hidden')) ui.removeClass('hidden'); else ui.addClass('hidden');",'but_meta'=>"btn"), 0);
}?></td></tr><?php if ($_smarty_tpl->tpl_vars['is_upd']->value=="Y") {?><tr class="upd_info hidden"><td>&nbsp;</td><td colspan="5"><?php echo $_smarty_tpl->__('ab__am_upd_text_msg',array("[name]"=>$_smarty_tpl->tpl_vars['a']->value['name']));
if ($_smarty_tpl->tpl_vars['a']->value['addon']=='ab__addons_manager') {
echo $_smarty_tpl->__("ab__am_upd_text_msg_manager",array("[href_api]"=>"https://cs-cart.alexbranding.com/api/?r=gm&c=".((string)$_smarty_tpl->tpl_vars['addons']->value[$_smarty_tpl->tpl_vars['a']->value['addon']]['code'])."&o=".((string)$_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['o']),"[name]"=>$_smarty_tpl->tpl_vars['a']->value['name'],"[href_addons]"=>fn_url("addons.manage")));
} else {
echo $_smarty_tpl->__('ab__am_upd_text_msg_addon',array("[name]"=>$_smarty_tpl->tpl_vars['a']->value['name'],"[href_addons]"=>fn_url("addons.manage"),"[code]"=>$_smarty_tpl->tpl_vars['addons']->value[$_smarty_tpl->tpl_vars['a']->value['addon']]['code'],"[href_ab__am_addons]"=>fn_url("ab__am.addons"),"[ab__am_addons]"=>$_smarty_tpl->__('ab__am_addons')));
}?><br><?php if (strlen($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['c'])) {
$_smarty_tpl->_capture_stack[0][] = array("changes", null, null); ob_start();
echo nl2br($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['c']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->__('ab__am_upd_text_changes',array("[version]"=>$_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['v'],"[date]"=>smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['ab_addons']->value['cs'][$_smarty_tpl->tpl_vars['a']->value['addon']]['lv']['t']),"%d-%b-%Y"),"[changes]"=>Smarty::$_smarty_vars['capture']['changes']));
}?></td></tr><?php }
} ?></tbody></table><?php } else { ?><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__addons_manager/views/ab__am/components/install_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__('ab__am_addons'),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
