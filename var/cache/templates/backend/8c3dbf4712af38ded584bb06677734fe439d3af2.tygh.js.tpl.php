<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:14
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__deal_of_the_day/pickers/promotions/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9341730395c254be6260941-06573719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c3dbf4712af38ded584bb06677734fe439d3af2' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__deal_of_the_day/pickers/promotions/js.tpl',
      1 => 1545824925,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9341730395c254be6260941-06573719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promotion_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'default_name' => 0,
    'multiple' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'promotion' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
    'hide_input' => 0,
    'input_id' => 0,
    'first_item' => 0,
    'single_line' => 0,
    'extra_class' => 0,
    'display_input_id' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254be628ed81_29063069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254be628ed81_29063069')) {function content_5c254be628ed81_29063069($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['promotion_id']->value) {?>
<?php $_smarty_tpl->tpl_vars["promotion"] = new Smarty_variable((($tmp = @fn_get_promotion_name($_smarty_tpl->tpl_vars['promotion_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."promotion".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["promotion"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td><input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
<td><a href="<?php echo htmlspecialchars(fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
<td>
<div class="hidden-tools">
<?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['promotion_id']->value)."', 'a'); return false;"));?>
</li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php }?>
</div>
</td>
<?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
<input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
</tr>
<?php } else { ?>
<span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item no-margin<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
<input class="cm-picker-value-description <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> size="10" name="page_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'ISO-8859-1');?>
>&nbsp;
</span>
<?php }?><?php }} ?>
