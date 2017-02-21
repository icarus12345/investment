<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-09 21:00:26
         compiled from "application\templates\dashboard\so\setting\editPanelImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21737584bb6ed506ec3-55715727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eee5ede5ae31c0aec679b06c8119d9d564f9099' => 
    array (
      0 => 'application\\templates\\dashboard\\so\\setting\\editPanelImage.tpl',
      1 => 1481732514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21737584bb6ed506ec3-55715727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb6ed571be6_98348136',
  'variables' => 
  array (
    'item' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb6ed571be6_98348136')) {function content_584bb6ed571be6_98348136($_smarty_tpl) {?><div class="col-sm-6">
    <div class="widget">
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->tpl_vars['item']->value->data_title;?>
</h4>
            <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
                <li>
                    <a href="JavaScript:myApp.saveForm(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_id)===null||$tmp==='' ? '' : $tmp);?>
)" title="Save" onclick="">
                        <i class="fa fa-save"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="" style="background:#fff">
            <div class="space-line"></div>
            <div class="col-sm-12">
                <form data-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_id)===null||$tmp==='' ? '' : $tmp);?>
" name="entryForm<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_id)===null||$tmp==='' ? '' : $tmp);?>
" id="entryForm<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_id)===null||$tmp==='' ? '' : $tmp);?>
" target="integration_asynchronous">
                    <input type="hidden" name="data_type" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_type)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['type']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
                    <input type="hidden" name="data_datatype" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_datatype)===null||$tmp==='' ? 'image' : $tmp);?>
"/>
                    <!-- <div class="row half">
                        <div class="col-mb-6 half">
                            <div class="pull-bottom control-group">
                                <div>Title :(*)</div>
                                <input type="text" class="form-control validate[required]" 
                                    data-prompt-position="topLeft:0,20"
                                    placeholder="Title"
                                    name="data_title"
                                    value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_title))===null||$tmp==='' ? '' : $tmp);?>
"
                                    />
                            </div>
                        </div>
                        <div class="col-mb-6 half">
                            <div class="control-group pull-bottom">
                                <div>Status :</div>
                                <select name="data_status" class="form-control selectpicker">
                                    <option value="true">Enable</option>
                                    <option value="false" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_status)===null||$tmp==='' ? '' : $tmp)=='false') {?>selected<?php }?>>Disable</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="pull-bottom control-group">
                        <!-- <div>Image :(*)</div> -->
                        <input type="hidden"
                                class="form-control validate[required,maxSize[255]]"
                                data-prompt-position="topLeft:0,20"
                                value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_content, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                name="data_content" 
                                id="data_content<?php echo $_smarty_tpl->tpl_vars['item']->value->data_id;?>
"
                                >
                        <div class="text-center">
                            <img style="max-width:100%;"  class="img-thumbnail" id="img-preview-<?php echo $_smarty_tpl->tpl_vars['item']->value->data_id;?>
" src="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_content, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '/libraries/images/image_available.gif' : $tmp);?>
">
                            <div class="space-line"></div>
                            <button type="button" class="btn btn-circle btn-default"
                            onclick="BrowseServerCallBack(function(src){document.getElementById('img-preview-<?php echo $_smarty_tpl->tpl_vars['item']->value->data_id;?>
').src = src;document.getElementById('data_content<?php echo $_smarty_tpl->tpl_vars['item']->value->data_id;?>
').value = src;});"
                            ><i class="fa fa-image"></i> Browse Image</button>
                        </div>
                    </div> 
                    <textarea name="data_desc" class="code" style="border:0;display:block;width:100%"><?php echo $_smarty_tpl->tpl_vars['item']->value->data_desc;?>
</textarea>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="space-line"></div>
        </div>
    </div>
    <div class="space-line"></div>
</div><?php }} ?>
