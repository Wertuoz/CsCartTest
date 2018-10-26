<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:13
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/components/select_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8573449365bc935fdc11687-03470571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c3d3b0b1c1bb922c78e9ce9c00853360e9f11e' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/views/suppliers/components/select_supplier.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8573449365bc935fdc11687-03470571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc935fdc25653_52922039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc935fdc25653_52922039')) {function content_5bc935fdc25653_52922039($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search_by_supplier'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>

<div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "control-group" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['supplier_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <label class="control-label"><?php echo $_smarty_tpl->__("search_by_supplier");?>
</label>
    <div class="controls">
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"suppliers.get_suppliers_list?show_all=Y&search=Y",'text'=>fn_get_supplier_name($_smarty_tpl->tpl_vars['search']->value['supplier_id']),'result_elm'=>$_smarty_tpl->tpl_vars['id']->value,'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector"), 0);?>

    </div>
</div><?php }} ?>
