<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:03
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/gdpr/componentes/agreement_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202972895c236b638b10e6-13447520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eead039473d7836361a413ec109d9b3dc982aa8' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/gdpr/componentes/agreement_checkbox.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1202972895c236b638b10e6-13447520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'type' => 0,
    'app' => 0,
    'tooltip_only' => 0,
    'input_id' => 0,
    'suffix' => 0,
    'agreement_required' => 0,
    'input_name' => 0,
    'input_value' => 0,
    'meta' => 0,
    'onclick' => 0,
    'checked' => 0,
    'gdpr_target_elem' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b639073a6_68752001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b639073a6_68752001')) {function content_5c236b639073a6_68752001($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_agreement'] = clone $_smarty_tpl->tpl_vars['show_agreement'];?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['suffix']->value;?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['input_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_id']->value)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_tmp1 : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['gdpr_target_elem'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label", null, 0);?>

        <div class="ty-gdpr-agreement">
            <label
                for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_label"
                class="<?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                    name="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                    value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_value']->value)===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                />
                <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                <i class="ty-icon-help-circle ty-gdpr-agreement--icon"></i>
            </label>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/gdpr_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'target_elem_id'=>$_smarty_tpl->tpl_vars['gdpr_target_elem']->value), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/componentes/agreement_checkbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/componentes/agreement_checkbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_agreement'] = clone $_smarty_tpl->tpl_vars['show_agreement'];?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['suffix']->value;?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['input_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_id']->value)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_tmp2 : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['gdpr_target_elem'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label", null, 0);?>

        <div class="ty-gdpr-agreement">
            <label
                for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_label"
                class="<?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                    name="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                    value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_value']->value)===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                />
                <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                <i class="ty-icon-help-circle ty-gdpr-agreement--icon"></i>
            </label>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/gdpr_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'target_elem_id'=>$_smarty_tpl->tpl_vars['gdpr_target_elem']->value), 0);?>

<?php }
}?><?php }} ?>
