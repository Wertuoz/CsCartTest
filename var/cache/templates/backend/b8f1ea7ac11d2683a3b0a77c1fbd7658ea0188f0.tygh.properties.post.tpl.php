<?php /* Smarty version Smarty-3.1.21, created on 2018-12-31 01:30:15
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/paypal/hooks/payments/properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12331249905c2946f7ecda43-91489802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f1ea7ac11d2683a3b0a77c1fbd7658ea0188f0' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/paypal/hooks/payments/properties.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12331249905c2946f7ecda43-91489802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2946f7ed8989_23497952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2946f7ed8989_23497952')) {function content_5c2946f7ed8989_23497952($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        _.paypal_processor_ids = <?php echo json_encode(fn_get_paypal_processors(''));?>
;

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data, response_text) {
            for (var i in elms) {
                fn_paypal_add_redesign_handlers(_);
                fn_paypal_perform_redesign(
                    _,
                    $('[data-ca-form-group="main"]', elms[i]),
                    $('[data-ca-form-group="processor"] select', elms[i]).val()
                );
            }
        });

        $(document).ready(function () {
            fn_paypal_add_redesign_handlers(_);
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
