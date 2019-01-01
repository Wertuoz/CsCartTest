<?php /* Smarty version Smarty-3.1.21, created on 2018-12-31 01:30:43
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/sbrf_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19890110595c294713bbf4b6-19503555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06af6880537ee4e877431373bd1c1ba3b063b3d4' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/sbrf_receipt.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19890110595c294713bbf4b6-19503555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c294713c2a012_50363470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c294713c2a012_50363470')) {function content_5c294713c2a012_50363470($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sbrf_recepient_name','sbrf_kpp','sbrf_inn','sbrf_okato_code','sbrf_settlement_account','sbrf_account_id','sbrf_bank','sbrf_bik','sbrf_cor_account','sbrf_kbk','addons.rus_payments.sbrf_prefix','addons.rus_payments.sbrf_prefix_details','sbrf_qr_resolution','sbrf_qr_print_size','sbrf_invoice_order_status'));
?>


<div class="control-group">
    <label class="control-label" for="sbrf_recepient_name"><?php echo $_smarty_tpl->__("sbrf_recepient_name");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_recepient_name]" id="sbrf_recepient_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_recepient_name'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="80">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_kpp"><?php echo $_smarty_tpl->__("sbrf_kpp");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_kpp]" id="sbrf_kpp" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_kpp'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="9" maxlength="9">
    </div>
</div>
    
<div class="control-group">
    <label class="control-label" for="sbrf_inn"><?php echo $_smarty_tpl->__("sbrf_inn");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_inn]" id="sbrf_inn" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_inn'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="12" maxlength="12">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_okato_code"><?php echo $_smarty_tpl->__("sbrf_okato_code");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_okato_code]" id="sbrf_okato_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_okato_code'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="11" maxlength="11">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_settlement_account"><?php echo $_smarty_tpl->__("sbrf_settlement_account");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_settlement_account]" id="sbrf_settlement_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_settlement_account'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="20" maxlength="20">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_account_id"><?php echo $_smarty_tpl->__("sbrf_account_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_account_id]" id="sbrf_account_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_account_id'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="80">
    </div>
</div>
    
<div class="control-group">
    <label class="control-label" for="sbrf_bank"><?php echo $_smarty_tpl->__("sbrf_bank");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_bank]" id="sbrf_bank" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_bank'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="80">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_bik"><?php echo $_smarty_tpl->__("sbrf_bik");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_bik]" id="sbrf_bik" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_bik'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="9" maxlength="9">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_cor_account"><?php echo $_smarty_tpl->__("sbrf_cor_account");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_cor_account]" id="sbrf_cor_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_cor_account'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="20" maxlength="20">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_kbk"><?php echo $_smarty_tpl->__("sbrf_kbk");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_kbk]" id="sbrf_kbk" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_kbk'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="29" maxlength="29">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_prefix"><?php echo $_smarty_tpl->__("addons.rus_payments.sbrf_prefix");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("addons.rus_payments.sbrf_prefix_details")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_prefix]" id="sbrf_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_prefix'], ENT_QUOTES, 'ISO-8859-1');?>
" size="80">
    </div>
</div>

<div class="control-group hidden">
    <input type="hidden" name="payment_data[processor_params][sbrf_enabled]" value="Y">
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_qr_resolution"><?php echo $_smarty_tpl->__("sbrf_qr_resolution");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_qr_resolution]" id="sbrf_qr_resolution" value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_qr_resolution']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_qr_resolution'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>200<?php }?>"  size="10" maxlength="10">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sbrf_qr_print_size"><?php echo $_smarty_tpl->__("sbrf_qr_print_size");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][sbrf_qr_print_size]" id="sbrf_qr_print_size" value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_qr_print_size']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_qr_print_size'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>200<?php }?>"  size="10" maxlength="10">
    </div>
</div>

<?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER')), null, 0);?>

<div class="control-group">
    <label class="control-label" for="sbrf_invoice_order_status"><?php echo $_smarty_tpl->__("sbrf_invoice_order_status");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][invoice_order_status]" id="sbrf_invoice_order_status">
            <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['invoice_order_status']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php }} ?>
