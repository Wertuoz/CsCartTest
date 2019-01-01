<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:59:09
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__search_motivation/views/ab__search_motivation/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275546855c236d0d944c40-89461743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62960e80fed4a05777fb74285ed601bf51f7636' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__search_motivation/views/ab__search_motivation/manage.tpl',
      1 => 1545824959,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '275546855c236d0d944c40-89461743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_phrases' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236d0d967212_06080985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236d0d967212_06080985')) {function content_5c236d0d967212_06080985($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ab__search_motivation.default_search_phrases','ttc_ab__search_motivation.default_search_phrases','ab__search_motivation.default_search_phrases'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" name="search_motivation_form">
<div id="content_general">
<div class="control-group">
<label class="control-label" for="elm_search_phrases"><?php echo $_smarty_tpl->__("ab__search_motivation.default_search_phrases");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__search_motivation.default_search_phrases")), 0);?>
:</label>
<div class="controls">
<textarea name="search_phrases" id="elm_search_phrases" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_phrases']->value, ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
</div>
</div>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"search_motivation_form",'but_name'=>"dispatch[ab__search_motivation.update]"), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__search_motivation.default_search_phrases"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
