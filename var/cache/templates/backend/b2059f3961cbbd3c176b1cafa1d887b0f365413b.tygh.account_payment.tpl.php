<?php /* Smarty version Smarty-3.1.21, created on 2018-12-31 01:30:23
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/account_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4685508815c2946ff9295e1-37934624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2059f3961cbbd3c176b1cafa1d887b0f365413b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/account_payment.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4685508815c2946ff9295e1-37934624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'id' => 0,
    'payment_image' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
    'account_fields' => 0,
    'account_field' => 0,
    'key_name' => 0,
    'profile_fields' => 0,
    'profile_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2946ff99c679_95147537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2946ff99c679_95147537')) {function content_5c2946ff99c679_95147537($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.rus_payments.company_info','recipient','address','phone','addons.rus_payments.account_kpp','inn_customer','addons.rus_payments.account_current','addons.rus_payments.account_bank','addons.rus_payments.account_bik','addons.rus_payments.account_cor','addons.rus_payments.invoice_print','addons.rus_payments.account_print_width','addons.rus_payments.account_print_height','account_order_status','addons.rus_payments.user_info','contact_information','billing_address','shipping_address'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.rus_payments.company_info"),'target'=>"#company_info"), 0);?>

<div id="company_info" class="in collapse">
    <div class="control-group">
        <label class="control-label" for="account_recepient_name"><?php echo $_smarty_tpl->__("recipient");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_recepient_name]" id="account_recepient_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_recepient_name'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_address"><?php echo $_smarty_tpl->__("address");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_address]" id="account_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_address'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_phone"><?php echo $_smarty_tpl->__("phone");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_phone]" id="account_phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_phone'], ENT_QUOTES, 'ISO-8859-1');?>
" size="80">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_kpp"><?php echo $_smarty_tpl->__("addons.rus_payments.account_kpp");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_kpp]" id="account_kpp" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_kpp'], ENT_QUOTES, 'ISO-8859-1');?>
" size="9" maxlength="9">
        </div>
    </div>
        
    <div class="control-group">
        <label class="control-label" for="account_inn"><?php echo $_smarty_tpl->__("inn_customer");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_inn]" id="account_inn" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_inn'], ENT_QUOTES, 'ISO-8859-1');?>
" size="12" maxlength="12">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_current"><?php echo $_smarty_tpl->__("addons.rus_payments.account_current");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_current]" id="account_current" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_current'], ENT_QUOTES, 'ISO-8859-1');?>
" size="20" maxlength="20">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_bank"><?php echo $_smarty_tpl->__("addons.rus_payments.account_bank");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_bank]" id="account_bank" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_bank'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="80">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_bik"><?php echo $_smarty_tpl->__("addons.rus_payments.account_bik");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_bik]" id="account_bik" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_bik'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="9" maxlength="9">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="account_cor"><?php echo $_smarty_tpl->__("addons.rus_payments.account_cor");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_cor]" id="account_cor" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_cor'], ENT_QUOTES, 'ISO-8859-1');?>
"  size="20" maxlength="20">
        </div>
    </div>

    <div class="control-group hidden">
        <input type="hidden" name="payment_data[processor_params][account_enabled]" value="Y">
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("addons.rus_payments.invoice_print");?>
:</label>
        <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"path_stamp",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'image_object_type'=>"stamp",'image_pair'=>$_smarty_tpl->tpl_vars['payment_image']->value['path_stamp'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>
</div>
    </div>

    <div class="control-group">
        <label class="control-label" for="print_width"><?php echo $_smarty_tpl->__("addons.rus_payments.account_print_width");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_print_width]" id="print_width" value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['account_print_width']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_print_width'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>120<?php }?>"  size="10" maxlength="10">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="print_height"><?php echo $_smarty_tpl->__("addons.rus_payments.account_print_height");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account_print_height]" id="print_height" value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['account_print_height']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account_print_height'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>120<?php }?>"  size="10" maxlength="10">
        </div>
    </div>

    <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER')), null, 0);?>

    <div class="control-group">
        <label class="control-label" for="account_order_status"><?php echo $_smarty_tpl->__("account_order_status");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][account_order_status]" id="account_order_status">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['account_order_status']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['account_fields']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.rus_payments.user_info"),'target'=>"#user_info"), 0);?>

    <div id="user_info" class="in collapse">
        <?php  $_smarty_tpl->tpl_vars["account_field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["account_field"]->_loop = false;
 $_smarty_tpl->tpl_vars["key_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['account_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["account_field"]->key => $_smarty_tpl->tpl_vars["account_field"]->value) {
$_smarty_tpl->tpl_vars["account_field"]->_loop = true;
 $_smarty_tpl->tpl_vars["key_name"]->value = $_smarty_tpl->tpl_vars["account_field"]->key;
?>
            <div class="control-group">
                <label class="control-label" for="account_field_inn"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account_field']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
:</label>
                <div class="controls">
                    <select name="payment_data[processor_params][fields_account][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                        <option value=""></option>
                        <optgroup label="<?php echo $_smarty_tpl->__("contact_information");?>
">
                            <?php  $_smarty_tpl->tpl_vars["profile_field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["profile_field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['C']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["profile_field"]->key => $_smarty_tpl->tpl_vars["profile_field"]->value) {
$_smarty_tpl->tpl_vars["profile_field"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['profile_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['checkout_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['partner_required']=='Y') {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['fields_account'][$_smarty_tpl->tpl_vars['key_name']->value]==$_smarty_tpl->tpl_vars['profile_field']->value['field_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php }?>
                            <?php } ?>
                        </optgroup>

                        <optgroup label="<?php echo $_smarty_tpl->__("billing_address");?>
">
                            <?php  $_smarty_tpl->tpl_vars["profile_field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["profile_field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['B']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["profile_field"]->key => $_smarty_tpl->tpl_vars["profile_field"]->value) {
$_smarty_tpl->tpl_vars["profile_field"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['profile_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['checkout_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['partner_required']=='Y') {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['fields_account'][$_smarty_tpl->tpl_vars['key_name']->value]==$_smarty_tpl->tpl_vars['profile_field']->value['field_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php }?>
                            <?php } ?>
                        </optgroup>

                        <optgroup label="<?php echo $_smarty_tpl->__("shipping_address");?>
">
                            <?php  $_smarty_tpl->tpl_vars["profile_field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["profile_field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['S']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["profile_field"]->key => $_smarty_tpl->tpl_vars["profile_field"]->value) {
$_smarty_tpl->tpl_vars["profile_field"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['profile_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['checkout_show']=='Y'||$_smarty_tpl->tpl_vars['profile_field']->value['partner_required']=='Y') {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['fields_account'][$_smarty_tpl->tpl_vars['key_name']->value]==$_smarty_tpl->tpl_vars['profile_field']->value['field_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php }?>
                            <?php } ?>
                        </optgroup>
                    </select>
                </div>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }} ?>
