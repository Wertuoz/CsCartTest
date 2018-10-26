<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 19:14:07
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:441497985bca02cfad9381-79968922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb92590c7e8232c8ea3e7dba2fd8fab86a31eae' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_body.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '441497985bca02cfad9381-79968922',
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
  'unifunc' => 'content_5bca02cfb11f34_52775491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bca02cfb11f34_52775491')) {function content_5bca02cfb11f34_52775491($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2 input-hidden">
</td>
<?php }} ?>
