<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 16:06:01
         compiled from "application\templates\dashboard\cp\content\editPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24351584bc579256ae3-15309059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1c9027cdbdf894228daa1df35a8890ca98aa15d' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\content\\editPanel.tpl',
      1 => 1436491380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24351584bc579256ae3-15309059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'item' => 0,
    'type' => 0,
    'cates' => 0,
    'c' => 0,
    'ci' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bc57936f721_17068112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bc57936f721_17068112')) {function content_584bc57936f721_17068112($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
<div class="widget">
    <div class="modal-header">
        <h4>Content <small><?php if ($_smarty_tpl->tpl_vars['item']->value) {?>Edit Item<?php } else { ?>Add Item<?php }?></small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
<?php }?>
        <input 
            type="hidden" 
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->content_id)===null||$tmp==='' ? '' : $tmp);?>
" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="content_type" 
                value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->content_type)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['type']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="content_title"
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->content_lock!='true') {?>
                            onblur="AliasTo(this,'#entryForm input[name=content_alias]')"
                            <?php }?>
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->content_title))===null||$tmp==='' ? '' : $tmp);?>
"
                            />
                    </div>
                </div>
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Alias :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->content_lock=='true') {?>
                            disabled=1
                            <?php }?>
                            data-prompt-position="topLeft:0,20"
                            placeholder="Alias"
                            name="content_alias"
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->content_alias))===null||$tmp==='' ? '' : $tmp);?>
"
                            />
                    </div>
                </div>
            </div>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Category :(*)</div>
                        <div class="row-fluid">
                            <select 
                                name="content_category" 
                                class="form-control selectpicker validate[required]"
                                data-prompt-position="topLeft:0,20"
                                data-putto="#frm-err-content_category"
                                data-live-search="true"
                                data-size="10"
                                >
                                <option value="">Nothing Selected</option>
                                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['cates']->value)===null||$tmp==='' ? null : $tmp)) {?>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option 
                                        data-content="<span style='padding-left: <?php echo $_smarty_tpl->tpl_vars['c']->value->cat_level*20;?>
px;'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</span>"
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->cat_id==$_smarty_tpl->tpl_vars['item']->value->content_category) {?>selected="1"<?php }?>
                                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_id)===null||$tmp==='' ? '' : $tmp);?>
">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_title)===null||$tmp==='' ? '' : $tmp);?>

                                    </option>
                                <?php } ?>
                                <?php }?>
                            </select>
                        </div>
                        <div id="frm-err-content_category"></div>
                    </div>
                </div>
                <div class="col-mb-6 col-sm-3 half">
                    <div class="pull-bottom control-group">
                        <div>Image :(*)</div>
                        <div class="input-append">
                            <input type="text" 
                                class="form-control validate[required,maxSize[255]]"
                                data-prompt-position="topLeft:0,20"
                                value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->content_thumb, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                name="content_thumb" 
                                id="content_thumb"
                                >
                            <span class="add-on popovers" 
                                data-container="body" 
                                data-trigger="hover" 
                                data-placement="top" 
                                data-toggle="popover"
                                data-content="<img style='max-width:100px' src='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->content_thumb, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '/libraries/images/image_available.svg' : $tmp);?>
'/>" 
                                data-original-title="Image Preview"
                                title="Choose Image"
                                onclick="BrowseServer('#content_thumb')">
                                <i class="fa fa-image"></i>
                            </span>
                        </div>
                    </div>  
                </div>
                <div class="col-mb-6 col-sm-3 half">
                    <div class="control-group pull-bottom">
                        <div>Status :</div>
                        <select name="content_status" class="form-control selectpicker">
                            <option value="true">Enable</option>
                            <option value="false" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value->content_status)===null||$tmp==='' ? '' : $tmp)=='false') {?>selected<?php }?>>Disable</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="content_desc"
                        data-putto=".error_desc" ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->content_desc))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        
                <div class="erb error_desc"></div>
            </div>
            <div class="control-group pull-bottom">
                <div>
                    Tags:
                </div>
                <textarea class="form-control" 
                        rows="2"
                        name="content_tag"
                        ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->content_tag))===null||$tmp==='' ? '' : $tmp);?>
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
                            name="content_content"
                            id="content_content"
                            data-putto=".error_desc" ><?php echo $_smarty_tpl->tpl_vars['item']->value->content_content;?>
</textarea>
                    <?php }?>
                </div>
                        
                <div class="erb error_desc"></div>
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
