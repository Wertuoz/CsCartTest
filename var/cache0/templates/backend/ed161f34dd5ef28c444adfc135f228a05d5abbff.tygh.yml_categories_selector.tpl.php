<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:17
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2834440575c006cb1ee8836-21310816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed161f34dd5ef28c444adfc135f228a05d5abbff' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2834440575c006cb1ee8836-21310816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj_id' => 0,
    'name' => 0,
    'value' => 0,
    'yml2_market_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006cb1efb739_47096285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cb1efb739_47096285')) {function content_5c006cb1efb739_47096285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('yml2_export_market_category','tt_yml2_export_market_category'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? "yml_categories" : $tmp), null, 0);?>

<div class="control-group">
    <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_export_market_category");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_yml2_export_market_category")), 0);?>
:</label>
    <div class="controls" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_box">
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large cm-yml-categories" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_market_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_market_category']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>/></br>
    </div>
</div>

<?php }} ?>
