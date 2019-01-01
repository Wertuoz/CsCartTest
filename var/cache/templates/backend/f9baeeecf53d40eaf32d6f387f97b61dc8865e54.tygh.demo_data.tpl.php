<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:55:48
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/views/abt__ut/demo_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3932651155c236c45000a93-09987338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9baeeecf53d40eaf32d6f387f97b61dc8865e54' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/abt__unitheme/views/abt__ut/demo_data.tpl',
      1 => 1545824810,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3932651155c236c45000a93-09987338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c45019365_71828319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c45019365_71828319')) {function content_5c236c45019365_71828319($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('abt__ut.demo_data.head','abt__ut.demo_data.table.description','abt__ut.demo_data.table.action','abt__ut.demo_data.table.description','abt__ut.demo_data.actions.add_banners','abt__ut.demo_data.table.action','add','abt__ut.demo_data','abt__unitheme','abt__ut.demo_data'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="ab__ut_demo_data_form" id="ab__ut_demo_data_form">
<h3><?php echo $_smarty_tpl->__("abt__ut.demo_data.head");?>
</h3>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="60%"><?php echo $_smarty_tpl->__("abt__ut.demo_data.table.description");?>
</th>
<th width="20%"><?php echo $_smarty_tpl->__("abt__ut.demo_data.table.action");?>
</th>
</tr>
</thead>
<tbody>
<tr>
<td data-th="<?php echo $_smarty_tpl->__("abt__ut.demo_data.table.description");?>
"><?php echo $_smarty_tpl->__("abt__ut.demo_data.actions.add_banners");?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("abt__ut.demo_data.table.action");?>
"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax1 cm-post btn btn-primary",'text'=>$_smarty_tpl->__("add"),'dispatch'=>"dispatch[abt__ut.demo_data.add_banners]"));?>
</td>
</tr>
</tbody>
</table>
</div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("abt__ut.demo_data"),'title_start'=>$_smarty_tpl->__("abt__unitheme"),'title_end'=>$_smarty_tpl->__("abt__ut.demo_data"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content_id'=>"ab__ut_demo_data_form"), 0);?>
<?php }} ?>
