<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:41:11
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19893832475bc93637b57af8-89690268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480e0d104b4dfc26f219138fd18de883b2277a0b' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19893832475bc93637b57af8-89690268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview_preset_id' => 0,
    'wrapper_extra_id' => 0,
    'object_type' => 0,
    'wrapper_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc93637b61e54_23368338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc93637b61e54_23368338')) {function content_5bc93637b61e54_23368338($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset <?php if ($_smarty_tpl->tpl_vars['preview_preset_id']->value) {?>cm-ajax cm-comet<?php }?>"
        data-ca-advanced-import-element="management_form"
        id="manage_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>
