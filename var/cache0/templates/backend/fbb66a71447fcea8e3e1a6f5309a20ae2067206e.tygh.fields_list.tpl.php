<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:46:58
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/fields_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226389935c006c62b1a253-99204230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbb66a71447fcea8e3e1a6f5309a20ae2067206e' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/fields_list.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '226389935c006c62b1a253-99204230',
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
  'unifunc' => 'content_5c006c62b328e1_38567384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006c62b328e1_38567384')) {function content_5c006c62b328e1_38567384($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('advanced_import.fields_mapping.description','advanced_import.modifiers_list','advanced_import.modifiers_list','advanced_import.column_header','advanced_import.product_property','advanced_import.first_line_import_value','advanced_import.modifier','no_data'));
?>
<div data-ca-advanced-import-preset-file-extension="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['file_extension'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
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
