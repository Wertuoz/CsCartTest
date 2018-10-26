<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:45:36
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/import_presets/components/fields_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14656300655bc93740c6a5d3-69287482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88080d043657e4deed0c00687f3b0d0cc36cedad' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/advanced_import/views/import_presets/components/fields_list.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14656300655bc93740c6a5d3-69287482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preset' => 0,
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc93740c8e281_48972206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc93740c8e281_48972206')) {function content_5bc93740c8e281_48972206($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('advanced_import.fields_mapping.description','advanced_import.modifiers_list','advanced_import.modifiers_list','advanced_import.column_header','advanced_import.product_property','advanced_import.first_line_import_value','advanced_import.modifier','no_data'));
?>
<div data-ca-advanced-import-preset-file-extension="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['file_extension'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
     class="preview-fields-mapping__wrapper clearfix"
>
    <p class="pull-left p-notice"><?php echo $_smarty_tpl->__("advanced_import.fields_mapping.description",array("[product]"=>@constant('PRODUCT_NAME')));?>
</p>
    <div class="btn-bar btn-toolbar pull-right">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action1",'but_target_id'=>"advanced_import_modifiers_list_popup",'but_text'=>$_smarty_tpl->__("advanced_import.modifiers_list"),'but_href'=>"advanced_import.modifiers_list",'but_meta'=>"btn adv-buttons pull-right cm-dialog-opener"), 0);?>

        <div id="advanced_import_modifiers_list_popup" class="hidden" title="<?php echo $_smarty_tpl->__("advanced_import.modifiers_list");?>
"></div>
    </div>

    <div class="clearfix"></div>

    <div class="span16 table-responsive-wrapper">
        <table width="100%" class="table table-responsive">
            <thead>
            <tr>
                <th class="import-field__name">
                    <?php echo $_smarty_tpl->__("advanced_import.column_header");?>

                </th>
                <th class="import-field__related_object">
                    <?php echo $_smarty_tpl->__("advanced_import.product_property",array("[product]"=>@constant('PRODUCT_NAME')));?>

                </th>
                <th class="import-field__preview">
                    <?php echo $_smarty_tpl->__("advanced_import.first_line_import_value");?>

                </th>
                <th class="import-field__modifier">
                    <?php echo $_smarty_tpl->__("advanced_import.modifier");?>

                </th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }
if (!$_smarty_tpl->tpl_vars['name']->_loop) {
?>
                <tr>
                    <td colspan="4">
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>
</div><?php }} ?>
