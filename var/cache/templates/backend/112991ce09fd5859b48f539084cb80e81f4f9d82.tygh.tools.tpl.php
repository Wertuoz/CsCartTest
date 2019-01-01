<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:05:49
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13704864905c236e9e0071e6-79967091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '112991ce09fd5859b48f539084cb80e81f4f9d82' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/tools.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13704864905c236e9e0071e6-79967091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skip_check_permissions' => 0,
    'tools_list' => 0,
    'tool_meta' => 0,
    'hide_tools' => 0,
    'override_meta' => 0,
    'link_text' => 0,
    'icon' => 0,
    'caret' => 0,
    'prefix' => 0,
    'hide_actions' => 0,
    'tool_href' => 0,
    'tool_override_meta' => 0,
    'tool_id' => 0,
    'tool_onclick' => 0,
    'title' => 0,
    'meta_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236e9e02d578_68451384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236e9e02d578_68451384')) {function content_5c236e9e02d578_68451384($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value||fn_check_html_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)) {?>
<div class="btn-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hide_tools']->value&&$_smarty_tpl->tpl_vars['tools_list']->value) {?>
    <a class="<?php if ($_smarty_tpl->tpl_vars['override_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['override_meta']->value, ENT_QUOTES, 'ISO-8859-1');
} else { ?>btn<?php }?> btn dropdown-toggle" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></i><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['caret']->value) {?><span class="caret"></span><?php }?>
    </a>
    <ul id="tools_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="dropdown-menu cm-smart-position">
        <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

    </ul>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_actions']->value) {?>
        <?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['tool_href']->value)) {?>
            <a class="<?php if ($_smarty_tpl->tpl_vars['tool_override_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_override_meta']->value, ENT_QUOTES, 'ISO-8859-1');
} else { ?>btn<?php }?> cm-tooltip" <?php if ($_smarty_tpl->tpl_vars['tool_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }
if ($_smarty_tpl->tpl_vars['tool_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tool_href']->value), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }
if ($_smarty_tpl->tpl_vars['tool_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
; return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['meta_data']->value) {
echo $_smarty_tpl->tpl_vars['meta_data']->value;
}?>>
                <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
                    <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></i>
                <?php } else { ?>
                    <i class="icon-plus"></i>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

            </a>
        <?php }?>
    <?php }?>
</div>
<?php }?><?php }} ?>
