<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 10:09:10
         compiled from "application\templates\dashboard\cp\serialize\editPanelGallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4525854ac56329a67-32633902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e32f7021748c54e5bb56c96bed77551436062cab' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\serialize\\editPanelGallery.tpl',
      1 => 1481459083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4525854ac56329a67-32633902',
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
  'unifunc' => 'content_5854ac566d1539_53935651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854ac566d1539_53935651')) {function content_5854ac566d1539_53935651($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
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
                        <div>Category :(*)</div>
                        <div class="row-fluid">
                            <select 
                                name="data_category" 
                                class="form-control selectpicker validate[required]"
                                data-prompt-position="topLeft:0,20"
                                data-putto="#frm-err-data_category"
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
                                        data-data="<span style='padding-left: <?php echo $_smarty_tpl->tpl_vars['c']->value->cat_level*20;?>
px;'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</span>"
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->cat_id==$_smarty_tpl->tpl_vars['item']->value->data_category) {?>selected="1"<?php }?>
                                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_id)===null||$tmp==='' ? '' : $tmp);?>
">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_title)===null||$tmp==='' ? '' : $tmp);?>

                                    </option>
                                <?php } ?>
                                <?php }?>
                            </select>
                        </div>
                        <div id="frm-err-data_category"></div>
                    </div>
                </div>
                <div class="col-mb-6 col-sm-3 half">
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
                
            </div>
            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="data_data[desc]"
                        data-putto=".error_desc" ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['desc']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        
                <div class="erb error_desc"></div>
            </div>
            
            <div class="control-group pull-bottom">
                <div>
                    Overview (*):
                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->agent->is_mobile()) {?>
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    <?php } else { ?>
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[overview]"
                            id="data_data_overview"
                            data-putto=".error_overview" ><?php echo $_smarty_tpl->tpl_vars['item']->value->data_data['overview'];?>
</textarea>
                    <?php }?>
                </div>
                        
                <div class="erb error_overview"></div>
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Location (*):
                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->agent->is_mobile()) {?>
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    <?php } else { ?>
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[location]"
                            id="data_data_location"
                            data-putto=".error_location" ><?php echo $_smarty_tpl->tpl_vars['item']->value->data_data['location'];?>
</textarea>
                    <?php }?>
                </div>
                        
                <div class="erb error_location"></div>
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Facilities (*):
                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->agent->is_mobile()) {?>
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    <?php } else { ?>
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[facilcities]"
                            id="data_data_facilcities"
                            data-putto=".error-facilcities" ><?php echo $_smarty_tpl->tpl_vars['item']->value->data_data['facilcities'];?>
</textarea>
                    <?php }?>
                </div>
                        
                <div class="erb error-facilcities"></div>
            </div>
            <div class="code">
                <div class="row half">
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Title :(*)</div>
                            <input type="text" 
                                class="form-control validate[required]" 
                                data-prompt-position="topLeft:0,20"
                                placeholder="Title"
                                name="data_data[image1_title]"
                                value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['image1_title']))===null||$tmp==='' ? '' : $tmp);?>
"
                                />
                        </div>
                    </div>
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Image :(*)</div>
                            <div class="input-append">
                                <input type="text" 
                                    class="form-control validate[required,maxSize[255]]"
                                    data-prompt-position="topLeft:0,20"
                                    value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['image1_src'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                    name="data_data[image1_src]" 
                                    id="data_data_image1"
                                    >
                                <span class="add-on" 
                                    title="Choose Image"
                                    onclick="BrowseServer('#data_data_image1')">
                                    <i class="fa fa-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group pull-bottom">
                    <div>
                        Desc (*):
                    </div>
                    <textarea class="form-control validate[required]" 
                            rows="2"
                            name="data_data[image1_desc]"
                            ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['image1_desc']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                </div>
            </div>
            <br/>
            <div class="code">
                <div class="row half">
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Title :(*)</div>
                            <input type="text" 
                                class="form-control validate[required]" 
                                data-prompt-position="topLeft:0,20"
                                placeholder="Title"
                                name="data_data[image2_title]"
                                value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['image2_title']))===null||$tmp==='' ? '' : $tmp);?>
"
                                />
                        </div>
                    </div>
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Image :(*)</div>
                            <div class="input-append">
                                <input type="text" 
                                    class="form-control validate[required,maxSize[255]]"
                                    data-prompt-position="topLeft:0,20"
                                    value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['image2_src'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                    name="data_data[image2_src]" 
                                    id="data_data_image2"
                                    >
                                <span class="add-on" 
                                    title="Choose Image"
                                    onclick="BrowseServer('#data_data_image2')">
                                    <i class="fa fa-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="code">
                <div class="row half">
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Title :(*)</div>
                            <input type="text" 
                                class="form-control validate[required]" 
                                data-prompt-position="topLeft:0,20"
                                placeholder="Title"
                                name="data_data[image3_title]"
                                value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['image3_title']))===null||$tmp==='' ? '' : $tmp);?>
"
                                />
                        </div>
                    </div>
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Image :(*)</div>
                            <div class="input-append">
                                <input type="text" 
                                    class="form-control validate[required,maxSize[255]]"
                                    data-prompt-position="topLeft:0,20"
                                    value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['image3_src'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                    name="data_data[image3_src]" 
                                    id="data_data_image3"
                                    >
                                <span class="add-on" 
                                    title="Choose Image"
                                    onclick="BrowseServer('#data_data_image3')">
                                    <i class="fa fa-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="code">
                <div class="row half">
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Title :(*)</div>
                            <input type="text" 
                                class="form-control validate[required]" 
                                data-prompt-position="topLeft:0,20"
                                placeholder="Title"
                                name="data_data[image4_title]"
                                value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->data_data['image4_title']))===null||$tmp==='' ? '' : $tmp);?>
"
                                />
                        </div>
                    </div>
                    <div class="col-mb-6 half">
                        <div class="pull-bottom control-group">
                            <div>Image :(*)</div>
                            <div class="input-append">
                                <input type="text" 
                                    class="form-control validate[required,maxSize[255]]"
                                    data-prompt-position="topLeft:0,20"
                                    value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->data_data['image4_src'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                                    name="data_data[image4_src]" 
                                    id="data_data_image4"
                                    >
                                <span class="add-on" 
                                    title="Choose Image"
                                    onclick="BrowseServer('#data_data_image4')">
                                    <i class="fa fa-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
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
