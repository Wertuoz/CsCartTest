<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:04:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2539548435c254c501e4541-37554532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d08eb74824204d8f42b827bbf72dc4f4b816b6a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2539548435c254c501e4541-37554532',
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
  'unifunc' => 'content_5c254c501e7128_57460136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c501e7128_57460136')) {function content_5c254c501e7128_57460136($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="span2">
</td>
<?php }} ?>
