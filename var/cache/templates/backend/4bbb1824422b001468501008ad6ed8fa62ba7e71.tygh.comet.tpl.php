<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 04:24:36
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244402085bc7e0d415ec94-31220991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bbb1824422b001468501008ad6ed8fa62ba7e71' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/common/comet.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1244402085bc7e0d415ec94-31220991',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc7e0d4162371_27799559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7e0d4162371_27799559')) {function content_5bc7e0d4162371_27799559($_smarty_tpl) {?><?php
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
