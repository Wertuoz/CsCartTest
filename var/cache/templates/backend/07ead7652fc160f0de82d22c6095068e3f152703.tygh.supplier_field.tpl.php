<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:44
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/components/supplier_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11634682265bc9361ce884e1-13391970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ead7652fc160f0de82d22c6095068e3f152703' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/components/supplier_field.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11634682265bc9361ce884e1-13391970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_id' => 0,
    'selected' => 0,
    'supplier' => 0,
    'name' => 0,
    'id' => 0,
    'read_only' => 0,
    'no_wrap' => 0,
    'tooltip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc9361ceadc55_87778032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc9361ceadc55_87778032')) {function content_5bc9361ceadc55_87778032($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['company_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['result_ids'] = new Smarty_variable("content_detailed", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['result_ids'] = clone $_smarty_tpl->tpl_vars['result_ids']; $_ptr = $_ptr->parent; }?>

<?php $_smarty_tpl->tpl_vars['supplier'] = new Smarty_variable(fn_if_get_supplier($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['supplier']->value!==false) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("s_body", null, null); ob_start(); ?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['read_only']->value) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <div class="text-type-value ajax-select-wrap">
                <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"suppliers.get_suppliers_list?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value),'text'=>$_smarty_tpl->tpl_vars['supplier']->value['name'],'result_elm'=>(($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp),'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector"), 0);?>

            </div>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?>
        <div class="control-group" id="suppliers_selector">
            <label class="control-label" for="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("supplier");
if ($_smarty_tpl->tpl_vars['tooltip']->value) {?> <?php $_smarty_tpl->_capture_stack[0][] = array("tooltip", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>Smarty::$_smarty_vars['capture']['tooltip']), 0);
}?></label>
            <div class="controls">
                <?php echo Smarty::$_smarty_vars['capture']['s_body'];?>

            </div>
        <!--suppliers_selector--></div>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

    <?php }?>

<?php }?><?php }} ?>