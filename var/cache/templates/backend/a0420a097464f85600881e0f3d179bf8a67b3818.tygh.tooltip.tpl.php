<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 04:43:45
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15832400765bc7e5513e1f43-62525788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0420a097464f85600881e0f3d179bf8a67b3818' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/common/tooltip.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15832400765bc7e5513e1f43-62525788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc7e5513e8126_95317596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7e5513e8126_95317596')) {function content_5bc7e5513e8126_95317596($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
