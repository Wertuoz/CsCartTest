<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 12:12:19
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/advanced_import/modifiers_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18325001745be009733d81d5-41309682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4daf6e5a2a60410cc8aa55ad7ab7784916474306' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/advanced_import/modifiers_list.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18325001745be009733d81d5-41309682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modifiers' => 0,
    'name' => 0,
    'modifier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be0097343d935_53141543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be0097343d935_53141543')) {function content_5be0097343d935_53141543($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('advanced_import.modifiers_description','advanced_import.modifiers_self_referencing_info','advanced_import.modifier_description.','advanced_import.modifier_number_of_parameters','any','advanced_import.modifier_self_reference_is_unsupported'));
?>
<p><?php echo $_smarty_tpl->__("advanced_import.modifiers_description");?>
</p>
<p><?php echo $_smarty_tpl->__("advanced_import.modifiers_self_referencing_info");?>
</p>

<ul>
    <?php  $_smarty_tpl->tpl_vars["modifier"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["modifier"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modifiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["modifier"]->key => $_smarty_tpl->tpl_vars["modifier"]->value) {
$_smarty_tpl->tpl_vars["modifier"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["modifier"]->key;
?>
        <li class="advanced-import__modifier-description">
            <?php echo $_smarty_tpl->__("advanced_import.modifier_description.".((string)$_smarty_tpl->tpl_vars['name']->value));?>

            <ul>
                <li><?php echo $_smarty_tpl->__("advanced_import.modifier_number_of_parameters");?>
: <b><?php if ($_smarty_tpl->tpl_vars['modifier']->value['parameters']===null) {
echo $_smarty_tpl->__("any");
} else {
echo $_smarty_tpl->tpl_vars['modifier']->value['parameters'];
}?></b></li>
                <?php if ($_smarty_tpl->tpl_vars['modifier']->value['current']===null) {?>
                    <li><?php echo $_smarty_tpl->__("advanced_import.modifier_self_reference_is_unsupported");?>
</li>
                <?php }?>
            </ul>
        </li>
    <?php } ?>
</ul>

<?php }} ?>
