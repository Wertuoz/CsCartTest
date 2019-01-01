<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:49
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/block_manager/block_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9203485535c254c091cb303-88575538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51f6f69db9ff1444327c5f4e6a861bf7e31db6ed' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9203485535c254c091cb303-88575538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid_id' => 0,
    'extra_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c091e7641_41528392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c091e7641_41528392')) {function content_5c254c091e7641_41528392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('manage_existing_block','use_existing_block','create_new_block'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage']&&$_REQUEST['manage']=="Y") {
echo $_smarty_tpl->__("manage_existing_block");
} else {
echo $_smarty_tpl->__("use_existing_block");
}?></a></li>
        <li id="create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div id="content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_create_new_blocks--></div>

    <div id="content_user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_user_existing_blocks--></div>
</div><?php }} ?>
