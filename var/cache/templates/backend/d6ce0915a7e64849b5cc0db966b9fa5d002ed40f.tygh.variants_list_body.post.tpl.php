<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:04:17
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:997399735c254c61408b97-16223525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ce0915a7e64849b5cc0db966b9fa5d002ed40f' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_body.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '997399735c254c61408b97-16223525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c61411ad3_64047851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c61411ad3_64047851')) {function content_5c254c61411ad3_64047851($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="span2 input-hidden">
</td>
<?php }} ?>