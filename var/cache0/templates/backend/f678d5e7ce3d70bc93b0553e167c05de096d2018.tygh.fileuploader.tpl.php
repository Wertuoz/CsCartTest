<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:51
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6254309475c006c1f6b6df1-23569209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f678d5e7ce3d70bc93b0553e167c05de096d2018' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/advanced_import/views/import_presets/components/fileuploader.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6254309475c006c1f6b6df1-23569209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'server_env' => 0,
    'post_max_size' => 0,
    'upload_max_filesize' => 0,
    'prefix' => 0,
    'var_name' => 0,
    'label_id' => 0,
    'id_var_name' => 0,
    'preset' => 0,
    'upload_file_text' => 0,
    'allowed_ext' => 0,
    'hide_server' => 0,
    'hidden_name' => 0,
    'hidden_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006c1f6f1f68_76117623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006c1f6f1f68_76117623')) {function content_5c006c1f6f1f68_76117623($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','text_select_file','local','server','url','text_allowed_to_upload_file_extension'));
?>
<?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'ISO-8859-1');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'ISO-8859-1');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            allowed_file_path: '<?php echo htmlspecialchars(fn_get_http_files_dir_path(), ENT_QUOTES, 'ISO-8859-1');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'ISO-8859-1');
$_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp8, null, 0);?>

<div class="fileuploader cm-field-container">
    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="" />

    <div id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="">
            <p class="cm-fu-file hidden">
                <i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                   alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
"
                   title="<?php echo $_smarty_tpl->__("remove_this_item");?>
"
                   onclick="Tygh.fileuploader.clean_selection(this.id);
                           Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"
                   class="icon-remove-sign cm-tooltip hand"
                ></i>&nbsp;
                <span></span>
            </p>
            <p class="cm-fu-no-file">
                <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("import_presets.get_file?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'ISO-8859-1');?>

                    </a>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("text_select_file");?>

                <?php }?>
            </p>
        </div>

        <input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" /><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" /><div class="btn-group" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="N"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("local") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</span></a><div class="image-selector"><label for=""><input type="file"name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"onchange="Tygh.fileuploader.show_loader(this.id);Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"class="file"data-ca-empty-file=""onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"accept=".<?php echo htmlspecialchars(implode($_smarty_tpl->tpl_vars['allowed_ext']->value,",."), ENT_QUOTES, 'ISO-8859-1');?>
"/></label></div></div><?php if (!($_smarty_tpl->tpl_vars['hide_server']->value||defined("RESTRICTED_ADMIN"))) {?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("server");?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("url");?>
</a><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php }?></div><?php if ($_smarty_tpl->tpl_vars['allowed_ext']->value) {?><p class="mute micro-note"><?php echo $_smarty_tpl->__("text_allowed_to_upload_file_extension",array("[ext]"=>implode($_smarty_tpl->tpl_vars['allowed_ext']->value,", ")));?>
</p><?php }?>
    </div>

</div><!--fileuploader--><?php }} ?>
