<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:31
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17689360305c27f67791da81-64370739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8576592c9cc317d430d6a58d003285cda0ba3a77' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/section.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17689360305c27f67791da81-64370739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f677927922_51936512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f677927922_51936512')) {function content_5c27f677927922_51936512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
