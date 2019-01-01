<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:31
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/reward_points/hooks/product_options/edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5294223105c27f677886d77-20731059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb55b3bce80030a8e3fc6546fb00696a58392243' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/reward_points/hooks/product_options/edit_product_options.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5294223105c27f677886d77-20731059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f67789ea73_95147222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f67789ea73_95147222')) {function content_5c27f67789ea73_95147222($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('earned_point_modifier','type','points_lower'));
?>
<div class="control-group">
    <label class="control-label" for="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("earned_point_modifier");?>
&nbsp;/ <?php echo $_smarty_tpl->__("type");?>
:</label>
    <div class="controls">
    	<input type="text" id="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][point_modifier]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['point_modifier'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>0.000<?php }?>" size="5" class="input-mini" />&nbsp;/&nbsp;<select name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][point_modifier_type]">
    	    <option value="A" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="A") {?>selected="selected"<?php }?>>(<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
    	    <option value="P" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="P") {?>selected="selected"<?php }?>>(%)</option>
    	</select>
    </div>
</div><?php }} ?>
