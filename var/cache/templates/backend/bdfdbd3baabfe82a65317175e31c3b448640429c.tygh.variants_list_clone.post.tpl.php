<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 16:20:23
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1468852795bc88897043152-94734207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdfdbd3baabfe82a65317175e31c3b448640429c' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1468852795bc88897043152-94734207',
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
  'unifunc' => 'content_5bc88897049215_39184181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc88897049215_39184181')) {function content_5bc88897049215_39184181($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }} ?>
