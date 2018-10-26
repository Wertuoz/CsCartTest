<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 13:46:05
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18910356745bc8646d7b1400-01629727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a11069b1f85027d0a937802cd545efa6799012d' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/common/sidebox.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18910356745bc8646d7b1400-01629727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc8646d7c0043_29093837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc8646d7c0043_29093837')) {function content_5bc8646d7c0043_29093837($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
