<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:47
         compiled from "/srv/www/esportshop.ru/design/backend/templates/components/easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14585750015c236f8bb33bf8-01514036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d07a28207eb70d2d6583420449bf1c506d1c1d3' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/components/easter_egg.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14585750015c236f8bb33bf8-01514036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f8bb3a700_30568018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f8bb3a700_30568018')) {function content_5c236f8bb3a700_30568018($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>