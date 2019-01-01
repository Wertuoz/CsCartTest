<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:31
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10414878665c27f6778a50a5-38049137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d10017c8e32a01d5c7bfd13de3080e4444a652' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10414878665c27f6778a50a5-38049137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f6778b1448_64263328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f6778b1448_64263328')) {function content_5c27f6778b1448_64263328($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'ISO-8859-1');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
