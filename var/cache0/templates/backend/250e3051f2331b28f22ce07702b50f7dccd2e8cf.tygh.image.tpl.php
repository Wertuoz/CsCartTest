<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:04
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14658923675c006bf054c906-13460731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250e3051f2331b28f22ce07702b50f7dccd2e8cf' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/image.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14658923675c006bf054c906-13460731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'href' => 0,
    'link_css_class' => 0,
    'image_data' => 0,
    'image_id' => 0,
    'image_css_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf0582f66_79839789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf0582f66_79839789')) {function content_5c006bf0582f66_79839789($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars["image_data"] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
if ($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php if ($_smarty_tpl->tpl_vars['image_id']->value) {?>id="image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {?>    class="spinner <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
"    data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php } else { ?>    class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" /><?php } else { ?><div class="no-image" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px;"><i class="glyph-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></div><?php }
if ($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value) {?></a><?php }?><?php }} ?>
