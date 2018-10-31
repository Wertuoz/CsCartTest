<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 09:07:12
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7243017925bd7f510367259-68801582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0286654c4d21e27d3bea971f08538660a5649f4' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7243017925bd7f510367259-68801582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd7f510370de8_99479744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd7f510370de8_99479744')) {function content_5bd7f510370de8_99479744($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
