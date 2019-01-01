<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:59:04
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__category_banners/views/ab__category_banners/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8002211145c255938677ea5-64860345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8b5086109b63dcc0cc7a4630a2e41dbd81062a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__category_banners/views/ab__category_banners/manage.tpl',
      1 => 1545824912,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8002211145c255938677ea5-64860345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'category_banners' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'category_banner' => 0,
    'settings' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2559386f53e9_47270921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2559386f53e9_47270921')) {function content_5c2559386f53e9_47270921($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('name','ab__cb.form.from_date','ab__cb.form.to_date','status','edit','delete','no_data','ab__cb.form.m_turn_on','ab__cb.form.m_turn_off','ab__category_banners.add','ab__category_banners'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="category_banners_form" id="category_banners_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="fake" value="1" />
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"exicon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"exicon-dummy\"></i>", null, 0);?>
<div class="items-container" id="ab__category_banners_list">
<?php if ($_smarty_tpl->tpl_vars['category_banners']->value) {?>
<table width="100%" class="table table-middle table-objects">
<thead>
<tr>
<th width="1%" class="left"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>
</th>
<th width="34%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=from_date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("ab__cb.form.from_date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="from_date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=to_date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("ab__cb.form.to_date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="to_date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="15%" class="">&nbsp;</th>
<th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars["category_banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_banner"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_banner"]->key => $_smarty_tpl->tpl_vars["category_banner"]->value) {
$_smarty_tpl->tpl_vars["category_banner"]->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['category_banner']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
">
<td class="left">
<input type="checkbox" name="category_banner_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item cm-no-hide-input" />
</td>
<td>
<a class="row-status" href="<?php echo htmlspecialchars(fn_url("ab__category_banners.update?category_banner_id=".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
<input type="hidden" name="category_banners_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'], ENT_QUOTES, 'ISO-8859-1');?>
][category_banner_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'], ENT_QUOTES, 'ISO-8859-1');?>
" >
</td>
<td>
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_from_date_".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id']),'date_name'=>"category_banners_data[".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'])."][from_date]",'date_val'=>$_smarty_tpl->tpl_vars['category_banner']->value['from_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

<input type="text" name="category_banners_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'], ENT_QUOTES, 'ISO-8859-1');?>
][from_time]" id="elm_from_time" value="<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['from_date']) {
echo htmlspecialchars(date("H:i",$_smarty_tpl->tpl_vars['category_banner']->value['from_date']), ENT_QUOTES, 'ISO-8859-1');
}?>" size="3" class="input-small input-hidden" placeholder="00:00" />
</td>
<td>
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_to_date_".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id']),'date_name'=>"category_banners_data[".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'])."][to_date]",'date_val'=>$_smarty_tpl->tpl_vars['category_banner']->value['to_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

<input type="text" name="category_banners_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'], ENT_QUOTES, 'ISO-8859-1');?>
][to_time]" id="elm_to_time" value="<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['to_date']) {
echo htmlspecialchars(date("H:i",$_smarty_tpl->tpl_vars['category_banner']->value['to_date']), ENT_QUOTES, 'ISO-8859-1');
}?>" size="3" class="input-small input-hidden" placeholder="00:00" />
</td>
<td>
<div class="hidden-tools">
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"ab__category_banners.update?category_banner_id=".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'])));?>
</li>
<?php if (fn_check_view_permissions("ab__category_banners.m_delete","POST")) {?>
<?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-post",'text'=>$_smarty_tpl->__("delete"),'href'=>"ab__category_banners.delete?category_banner_id=".((string)$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
</li>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

</div>
</td>
<td class="right nowrap">
<?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['category_banner']->value['category_banner_id'],'status'=>$_smarty_tpl->tpl_vars['category_banner']->value['status'],'hidden'=>false,'object_id_name'=>"category_banner_id",'table'=>"ab__category_banners"), 0);?>

</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--ab__category_banners_list--></div>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['category_banners']->value) {?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[ab__category_banners.m_delete]",'form'=>"category_banners_form"));?>
</li>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("ab__cb.form.m_turn_on"),'dispatch'=>"dispatch[ab__category_banners.m_turn_on]",'form'=>"category_banners_form"));?>
</li>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("ab__cb.form.m_turn_off"),'dispatch'=>"dispatch[ab__category_banners.m_turn_off]",'form'=>"category_banners_form"));?>
</li>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php if ($_smarty_tpl->tpl_vars['category_banners']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[ab__category_banners.m_update]",'but_role'=>"submit-button",'but_target_form'=>"category_banners_form"), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"ab__category_banners.add",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("ab__category_banners.add"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__category_banners"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
