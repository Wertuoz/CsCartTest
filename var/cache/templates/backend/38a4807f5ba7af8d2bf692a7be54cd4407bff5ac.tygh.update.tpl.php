<?php /* Smarty version Smarty-3.1.21, created on 2018-11-03 22:57:58
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2971736935bddfdc664dd28-75382421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a4807f5ba7af8d2bf692a7be54cd4407bff5ac' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/update.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2971736935bddfdc664dd28-75382421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'supplier' => 0,
    'form_class' => 0,
    'id' => 0,
    'settings' => 0,
    'countries' => 0,
    '_country' => 0,
    'code' => 0,
    'country' => 0,
    'states' => 0,
    '_state' => 0,
    'state' => 0,
    'shippings' => 0,
    'shipping_id' => 0,
    'shipping' => 0,
    'title_start' => 0,
    'title_end' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bddfdc683ba18_49741769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bddfdc683ba18_49741769')) {function content_5bddfdc683ba18_49741769($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('information','name','contact_information','email','phone','url','fax','shipping_address','address','city','country','select_country','state','select_state','zip_postal_code','shipping_methods','available_for_supplier','shipping_methods','available_for_supplier','no_data','editing_supplier','add_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['supplier']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    

        <form class="form-horizontal form-edit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_class']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="supplier_update_form" enctype="multipart/form-data"> 
        
            <input type="hidden" name="fake" value="1" />
            <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="supplier_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

            
            <div id="content_general" class="hidden"> 
                <fieldset>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information")), 0);?>


                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:general_information")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:general_information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="control-group">
                            <label for="elm_supplier_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                            <div class="controls">
                                <input type="text" name="supplier_data[name]" id="elm_supplier_name" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                            </div>
                        </div>

                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"supplier_data[company_id]",'selected'=>$_smarty_tpl->tpl_vars['supplier']->value['company_id']), 0);?>


                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"supplier_data[status]",'id'=>"elm_supplier_status",'obj'=>$_smarty_tpl->tpl_vars['supplier']->value), 0);?>


                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:contact_information")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:contact_information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("contact_information")), 0);?>


                            <div class="control-group">
                                <label for="elm_supplier_email" class="control-label cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                                <div class="controls">
                                    <input type="text" name="supplier_data[email]" id="elm_supplier_email" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="elm_supplier_phone" class="control-label cm-required"><?php echo $_smarty_tpl->__("phone");?>
:</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="supplier_data[phone]" id="elm_supplier_phone" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="elm_supplier_url"><?php echo $_smarty_tpl->__("url");?>
:</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="supplier_data[url]" id="elm_supplier_url" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['url'], ENT_QUOTES, 'UTF-8');?>
" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="elm_supplier_fax"><?php echo $_smarty_tpl->__("fax");?>
:</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="supplier_data[fax]" id="elm_supplier_fax" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['fax'], ENT_QUOTES, 'UTF-8');?>
"  />
                                </div>
                            </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:contact_information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:shipping_address")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:shipping_address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shipping_address")), 0);?>


                            <div class="control-group">
                                <label for="elm_supplier_address" class="control-label cm-required"><?php echo $_smarty_tpl->__("address");?>
:</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="supplier_data[address]" id="elm_supplier_address" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="elm_supplier_city" class="control-label cm-required"><?php echo $_smarty_tpl->__("city");?>
:</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="supplier_data[city]" id="elm_supplier_city" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="elm_supplier_country" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
:</label>
                                <div class="controls">
                                    <?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['supplier']->value['country'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
                                    <select class="cm-country cm-location-shipping" id="elm_supplier_country" name="supplier_data[country]">
                                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                                        <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['supplier']->value['country'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['supplier']->value['state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>

                                <label for="elm_supplier_state" class="control-label cm-required"><?php echo $_smarty_tpl->__("state");?>
:</label>
                                <div class="controls">
                                    <select id="elm_supplier_state" name="supplier_data[state]" class="cm-state cm-location-shipping <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?>">
                                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                                        <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                                            <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php } ?>
                                        <?php }?>
                                    </select>
                                    <input type="text" id="elm_supplier_state_d" name="supplier_data[state]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> class="cm-state cm-location-shipping <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> cm-skip-avail-switch" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="elm_supplier_zipcode" class="control-label cm-required cm-zipcode cm-location-shipping"><?php echo $_smarty_tpl->__("zip_postal_code");?>
:</label>
                                <div class="controls">
                                    <input type="text" name="supplier_data[zipcode]" id="elm_supplier_zipcode" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
                                </div>
                            </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:shipping_address"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:general_information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </fieldset>
            </div> 
            

            <div id="content_products" class="hidden">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"supplier_data[products]",'data_id'=>"supplier_products",'item_ids'=>$_smarty_tpl->tpl_vars['supplier']->value['products'],'type'=>"links"), 0);?>

            </div>

            <div id="content_shippings">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:shipping_methods")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:shipping_methods"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
                    <div class="table-responsive-wrapper">
                        <table width="100%" class="table table-middle table-responsive">
                        <thead>
                        <tr>
                            <th width="50%"><?php echo $_smarty_tpl->__("shipping_methods");?>
</th>
                            <th class="center"><?php echo $_smarty_tpl->__("available_for_supplier");?>
</th>
                        </tr>
                        </thead>
                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['shippings']) {?>
                            <?php $_smarty_tpl->tpl_vars["shippings_ids"] = new Smarty_variable($_smarty_tpl->tpl_vars['supplier']->value['shippings'], null, 0);?>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shippings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping_id"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>
                        <tr>
                            <td data-th="<?php echo $_smarty_tpl->__("shipping_methods");?>
"><a href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                            <td class="center" data-th="<?php echo $_smarty_tpl->__("available_for_supplier");?>
">
                                <input type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['supplier']->value['supplier_id']||smarty_modifier_in_array($_smarty_tpl->tpl_vars['shipping_id']->value,$_smarty_tpl->tpl_vars['supplier']->value['shippings'])) {?> checked="checked"<?php }?> name="supplier_data[shippings][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            </td>
                        </tr>
                        <?php } ?>
                        </table>
                    </div>
                    <?php } else { ?>
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:shipping_methods"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

        </form> 

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>"suppliers",'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[suppliers.update]",'but_target_form'=>"supplier_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php if ($_smarty_tpl->tpl_vars['supplier']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__("editing_supplier"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['supplier']->value['name'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->__("add_supplier"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
