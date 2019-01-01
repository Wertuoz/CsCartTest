<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:46:58
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8327467295c006c62b3b693-21338003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394755a604844590cb5ac7b2480312516df202e0' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/field.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8327467295c006c62b3b693-21338003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'relations' => 0,
    'group_info' => 0,
    'object' => 0,
    'related_object_type' => 0,
    'object_name' => 0,
    'preset' => 0,
    'preview' => 0,
    'preview_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006c62b7fa86_31123045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006c62b7fa86_31123045')) {function content_5c006c62b7fa86_31123045($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('advanced_import.column_header','advanced_import.product_property','none','advanced_import.coming_soon','advanced_import.first_line_import_value','advanced_import.modifier_title','advanced_import.example_imported_title','advanced_import.example_modified_title','advanced_import.show_more','advanced_import.show_less','advanced_import.modifier','advanced_import.modifier'));
?>
<tr class="import-field" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <td class="import-field__name" data-th="<?php echo $_smarty_tpl->__("advanced_import.column_header");?>
">
        <input type="hidden"
               name="fields[_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
][name]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
        />
        <span data-ca-advanced-import-element="field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span>
    </td>
    <td class="import-field__related_object" data-th="<?php echo $_smarty_tpl->__("advanced_import.product_property",array("[product]"=>@constant('PRODUCT_NAME')));?>
">
        <input type="hidden"
               name="fields[_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
][related_object_type]"
               id="elm_field_related_object_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
        />
        <select
                data-ca-advanced-import-field-related-object-selector="true"
                data-ca-advanced-import-field-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                id="elm_import_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                name="fields[_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
][related_object]"
                class="input-hidden cm-object-selector import-field__related_object-select"
                data-width="100%"
                data-ca-enable-search="true"
                data-ca-placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"
                data-ca-allow-clear="true">
            <option
                data-ca-advanced-import-field-related-object-type="skip">
            </option>
            <?php  $_smarty_tpl->tpl_vars['group_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_info']->_loop = false;
 $_smarty_tpl->tpl_vars['related_object_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['relations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_info']->key => $_smarty_tpl->tpl_vars['group_info']->value) {
$_smarty_tpl->tpl_vars['group_info']->_loop = true;
 $_smarty_tpl->tpl_vars['related_object_type']->value = $_smarty_tpl->tpl_vars['group_info']->key;
?>
                <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_info']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_smarty_tpl->tpl_vars['object_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_info']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
 $_smarty_tpl->tpl_vars['object_name']->value = $_smarty_tpl->tpl_vars['object']->key;
?>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['object']->value['hidden'])===null||$tmp==='' ? false : $tmp)) {
continue 1;
}?>
                        <option data-ca-advanced-import-field-related-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['object']->value['required']) {?>class="selectbox-highlighted"<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['related_object_type']==$_smarty_tpl->tpl_vars['related_object_type']->value&&$_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['related_object']==$_smarty_tpl->tpl_vars['object_name']->value) {?>
                                    selected="selected"
                                <?php }?>
                        ><?php if ($_smarty_tpl->tpl_vars['object']->value['show_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'ISO-8859-1');
}
if ($_smarty_tpl->tpl_vars['object']->value['show_name']&&$_smarty_tpl->tpl_vars['object']->value['show_description']) {?> (<?php }
if ($_smarty_tpl->tpl_vars['object']->value['show_description']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['description'], ENT_QUOTES, 'ISO-8859-1');
}
if ($_smarty_tpl->tpl_vars['object']->value['show_name']&&$_smarty_tpl->tpl_vars['object']->value['show_description']) {?>)<?php }?></option>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['object']->value['has_more'])===null||$tmp==='' ? false : $tmp)) {?>
                            <option disabled="disabled"><?php echo $_smarty_tpl->__("advanced_import.coming_soon");?>
</option>
                        <?php }?>
                    <?php } ?>
                </optgroup>
            <?php } ?>
        </select>
    </td>
    <td class="import-field__preview" data-th="<?php echo $_smarty_tpl->__("advanced_import.first_line_import_value");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['preview_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preview_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preview']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preview_item']->key => $_smarty_tpl->tpl_vars['preview_item']->value) {
$_smarty_tpl->tpl_vars['preview_item']->_loop = true;
?>
                <div class="import-field__preview-wrapper cm-show-more__wrapper">
                    <div class="import-field__preview-value cm-show-more__block">
                        <?php if ($_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['modifier']) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['modified'], ENT_QUOTES, 'ISO-8859-1');?>

                            <div class="import-field__preview-info">
                                <a class="import-field__preview-button"><i class="icon-question-sign"></i></a>
                                <div class="popover fade bottom in">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title"><?php echo $_smarty_tpl->__("advanced_import.modifier_title");?>
</h3>
                                    <div class="popover-content">
                                        <div class="import-field__preview--original">
                                            <strong><?php echo $_smarty_tpl->__("advanced_import.example_imported_title");?>
</strong>
                                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                                        </div>
                                        <div class="import-field__preview--modified">
                                            <strong><?php echo $_smarty_tpl->__("advanced_import.example_modified_title");?>
</strong>
                                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['modified'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'], ENT_QUOTES, 'ISO-8859-1');?>

                        <?php }?>
                    </div>
                </div>
            <?php } ?>
            <div class="cm-show-more__btn">
                <a href="#" class="cm-show-more__btn-more"><?php echo $_smarty_tpl->__("advanced_import.show_more");?>
</a>
                <a href="#" class="cm-show-more__btn-less"><?php echo $_smarty_tpl->__("advanced_import.show_less");?>
</a>
            </div>
        <?php }?>
    </td>
    <td class="import-field__modifier" data-th="<?php echo $_smarty_tpl->__("advanced_import.modifier");?>
">
        <div class="control-group import-field__modifier-input-group">
            <input type="text"
                   name="fields[_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
][modifier]"
                   class="input-text input-hidden import-field__modifier-input"
                   placeholder="<?php echo $_smarty_tpl->__("advanced_import.modifier");?>
"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['modifier'], ENT_QUOTES, 'ISO-8859-1');?>
"
                   data-ca-advanced-import-original-value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                   data-ca-advanced-import-element="modifier"
            />
        </div>
    </td>
<!--field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></tr><?php }} ?>
