<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 11:12:47
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/banners/views/banners/components/banners_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18804921735bc8407f0d0db2-21788443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab72c1d2fa09cff301826377bab00fa6f06df9a' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/banners/views/banners/components/banners_search_form.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18804921735bc8407f0d0db2-21788443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'form_meta' => 0,
    'selected_section' => 0,
    'put_request_vars' => 0,
    'extra' => 0,
    'search' => 0,
    'items_status' => 0,
    'key' => 0,
    'status' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc8407f10d7b6_64557842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc8407f10d7b6_64557842')) {function content_5bc8407f10d7b6_64557842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_array_to_fields')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.array_to_fields.php';
?><?php
fn_preload_lang_vars(array('search','banner','type','all','graphic_banner','text_banner','status','all'));
?>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>

<form name="banner_search_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_REQUEST['redirect_url']) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
        <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
        <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <div class="sidebar-field">
            <label for="elm_name"><?php echo $_smarty_tpl->__("banner");?>
</label>
            <div class="break">
                <input type="text" name="name" id="elm_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="sidebar-field">
            <label for="elm_type"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
                <select name="type" id="elm_type">
                    <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="G") {?>selected="selected"<?php }?> value="G"><?php echo $_smarty_tpl->__("graphic_banner");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="T") {?>selected="selected"<?php }?> value="T"><?php echo $_smarty_tpl->__("text_banner");?>
</option>
                </select>
            </div>
        </div>

        <div class="sidebar-field">
            <label for="elm_type"><?php echo $_smarty_tpl->__("status");?>
</label>
            <?php $_smarty_tpl->tpl_vars["items_status"] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
            <div class="controls">
                <select name="status" id="elm_type">
                    <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']==$_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_adv_link'=>true,'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"banners"), 0);?>


</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?><?php }} ?>
