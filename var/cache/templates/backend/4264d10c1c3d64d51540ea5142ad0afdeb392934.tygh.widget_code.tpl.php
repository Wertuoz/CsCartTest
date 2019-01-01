<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:00:26
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/block_manager/widget_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10715712895c236d5a54d7a6-23306147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4264d10c1c3d64d51540ea5142ad0afdeb392934' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/block_manager/widget_code.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10715712895c236d5a54d7a6-23306147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_https_url' => 0,
    'widget_http_url' => 0,
    'widget_layout_id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236d5a5568d0_69079529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236d5a5568d0_69079529')) {function content_5c236d5a5568d0_69079529($_smarty_tpl) {?><div class="tygh" id="tygh_container">
</div>
<?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
    (function() {
        var url = 'https:' == document.location.protocol ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_https_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_http_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
        var cw = document.createElement('script'); cw.type = 'text/javascript'; cw.async = true;
        cw.src = '//widget.cart-services.com/static/init.js?url=' + url + '&layout=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['widget_layout_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
        document.getElementById('tygh_container').appendChild(cw);
        })();
<?php echo '</script'; ?>
>
<!-- Before using a widget make sure that the
" <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> "
meta tag exists. -->
<?php }} ?>
