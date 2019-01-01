<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:44
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21329039965c006c18b33379-25906212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f513baf883b128b2e055bd538bb63637a0ea800' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21329039965c006c18b33379-25906212',
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
  'unifunc' => 'content_5c006c18b3c362_48086505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006c18b3c362_48086505')) {function content_5c006c18b3c362_48086505($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
"
        method="post"
        name="manage_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset <?php if ($_smarty_tpl->tpl_vars['preview_preset_id']->value) {?>cm-ajax cm-comet<?php }?>"
        data-ca-advanced-import-element="management_form"
        id="manage_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>
