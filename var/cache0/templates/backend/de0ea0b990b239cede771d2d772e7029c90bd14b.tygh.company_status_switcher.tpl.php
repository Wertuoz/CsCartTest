<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:39:51
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/companies/components/company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306763825bfbbf6761b422-33684991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de0ea0b990b239cede771d2d772e7029c90bd14b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/companies/components/company_status_switcher.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '306763825bfbbf6761b422-33684991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbbf67626120_03008830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbbf67626120_03008830')) {function content_5bfbbf67626120_03008830($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
?><div class="switch switch-mini cm-switch list-btns company-switch-storefront-status-button" data-ca-company-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-opened-status="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPENED"), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-closed-status="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-return-url="<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');?>
" id="switch_storefront_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPENED"), null, 0);?>
    <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?>/>
</div>
<?php }} ?>
