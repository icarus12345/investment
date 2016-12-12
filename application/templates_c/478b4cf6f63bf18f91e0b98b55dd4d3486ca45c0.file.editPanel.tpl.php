<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 19:13:52
         compiled from "application\templates\dashboard\cp\cdata\editPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28386584c20c4c152f3-70128876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478b4cf6f63bf18f91e0b98b55dd4d3486ca45c0' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\cdata\\editPanel.tpl',
      1 => 1481458429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28386584c20c4c152f3-70128876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584c20c4d505b0_19727582',
  'variables' => 
  array (
    'action' => 0,
    'item' => 0,
    'type' => 0,
    'ci' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c20c4d505b0_19727582')) {function content_584c20c4d505b0_19727582($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
<div class="widget">
    <div class="modal-header">
        <h4>Entry <small><?php if ($_smarty_tpl->tpl_vars['item']->value) {?>Edit Item<?php } else { ?>Add Item<?php }?></small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
<?php }?>
        <input 
            type="hidden" 
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_id)===null||$tmp==='' ? '' : $tmp);?>
" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="data_type" 
                value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_type)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['type']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="data_title"
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->data_lock!='true') {?>
                            onblur="AliasTo(this,'#entryForm input[name=\'data_data[alias]\']')"
                            <?php }?>
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_title))===null||$tmp==='' ? '' : $tmp);?>
"
                            />
                    </div>
                </div>
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Alias :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->data_lock=='true') {?>
                            disabled=1
                            <?php }?>
                            data-prompt-position="topLeft:0,20"
                            placeholder="Alias"
                            name="data_data[alias]"
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['alias']))===null||$tmp==='' ? '' : $tmp);?>
"
                            />
                    </div>
                </div>
            </div>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Image :(*)</div>
                        <div class="input-append">
                            <input type="text" 
                                class="form-control validate[required,maxSize[255]]"
                                data-prompt-position="topLeft:0,20"
                                value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['thumb'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                name="data_data[thumb]" 
                                id="data_thumb"
                                >
                            <span class="add-on popovers" 
                                data-container="body" 
                                data-trigger="hover" 
                                data-placement="top" 
                                data-toggle="popover"
                                data-data="<img style='max-width:100px' src='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['thumb'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '/libraries/images/image_available.svg' : $tmp);?>
'/>" 
                                data-original-title="Image Preview"
                                title="Choose Image"
                                onclick="BrowseServer('#data_thumb')">
                                <i class="fa fa-image"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-mb-6 col-sm-3 half">
                    <div class="control-group pull-bottom">
                        <div>Status :</div>
                        <select name="data_status" class="form-control selectpicker">
                            <option value="true">Enable</option>
                            <option value="false" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value->data_status)===null||$tmp==='' ? '' : $tmp)=='false') {?>selected<?php }?>>Disable</option>
                        </select>
                    </div>
                </div>
                <div class="col-mb-6 col-sm-3 half">
                     
                </div>
                
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Brief (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="data_data[brief]"
                        ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['brief']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="data_data[desc]"
                        ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['desc']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        
            </div>
            
            <div class="control-group pull-bottom">
                <div>
                    Content (*):
                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->agent->is_mobile()) {?>
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    <?php } else { ?>
                    <textarea class="form-control validate[required]" 
                            rows="3"
                            name="data_data[content]"
                            id="data_data_content"
                            data-isEditor="true"
                            data-putto=".error-content" ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['content']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    <?php }?>
                </div>
                        
                <div class="erb error-content"></div>
            </div>
            <div class="control-group">
            <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
            <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
        </form>
<?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
    </div>
</div>
<?php }?>
<?php }} ?>
