<?php /* Smarty version Smarty-3.1.21, created on 2018-11-24 02:27:33
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2739744875bf88ce50ee6b9-70244267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b77bc92ce706da57fa0a82540af511c3cf52b8' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/comet.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2739744875bf88ce50ee6b9-70244267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bf88ce50f2287_20427177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf88ce50f2287_20427177')) {function content_5bf88ce50f2287_20427177($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>