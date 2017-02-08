<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 21:21:48
         compiled from "application\templates\dashboard\cp\serialize\editPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152535854d37fd33988-15892646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed30fd47776d0258a07facd7b01d72a87f01c102' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\serialize\\editPanel.tpl',
      1 => 1486563646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152535854d37fd33988-15892646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5854d37fe26df1_49870287',
  'variables' => 
  array (
    'action' => 0,
    'item' => 0,
    'type' => 0,
    'cates' => 0,
    'c' => 0,
    'entry_setting' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854d37fe26df1_49870287')) {function content_5854d37fe26df1_49870287($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
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
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->_id)===null||$tmp==='' ? '' : $tmp);?>
" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="_type" 
                value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->_type)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['type']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
            <div class="pull-bottom control-group">
                <div>Title :(*)</div>
                <input type="text" 
                    class="form-control validate[required,maxSize[120]]" 
                    data-prompt-position="topLeft:0,20"
                    placeholder="Title"
                    name="_title"
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->content_lock!='true') {?>
                    onblur="AliasTo(this,'#entryForm input[name=\'_alias\']')"
                    <?php }?>
                    value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_title))===null||$tmp==='' ? '' : $tmp);?>
"
                    />
            </div>
            <input type="hidden" name="_alias" 
                value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_alias))===null||$tmp==='' ? '' : $tmp);?>
"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Category :(*)</div>
                        <div class="row-fluid">
                            <select 
                                name="_category" 
                                class="form-control selectpicker validate[required]"
                                data-prompt-position="topLeft:0,20"
                                data-putto="#frm-err-category"
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
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->cat_id==$_smarty_tpl->tpl_vars['item']->value->_category) {?>selected="1"<?php }?>
                                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_id)===null||$tmp==='' ? '' : $tmp);?>
">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_title)===null||$tmp==='' ? '' : $tmp);?>

                                    </option>
                                <?php } ?>
                                <?php }?>
                            </select>
                        </div>
                        <div id="frm-err-category"></div>
                    </div>
                </div>
                <div class="col-mb-3 half">
                    <div class="control-group pull-bottom">
                        <div>Status :</div>
                        <select name="_status" class="form-control selectpicker">
                            <option value="true">Enable</option>
                            <option value="false" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value->image_status)===null||$tmp==='' ? '' : $tmp)=='false') {?>selected<?php }?>>Disable</option>
                        </select>
                    </div>
                </div>
            </div>

            <fieldset>
                <legend>Data Information</legend>
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry_setting']->value->_data['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['type']=='string') {?>
                <div class="pull-bottom control-group">
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 :(*)</div>
                    <input type="text" 
                        class="form-control validate[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['valid'])===null||$tmp==='' ? '' : $tmp);?>
]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"
                        name="_data[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
]"
                        value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_data[(($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp)]))===null||$tmp==='' ? '' : $tmp);?>
"
                        />
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type']=='text') {?>
                <div class="pull-bottom control-group">
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 :(*)</div>
                    <textarea type="text" 
                        class="form-control validate[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['valid'])===null||$tmp==='' ? '' : $tmp);?>
]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"
                        name="_data[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
]"
                        ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_data[(($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp)]))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type']=='html') {?>
                <div class="pull-bottom control-group">
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 :(*)</div>
                    <div>
                        <textarea type="text" 
                            data-isEditor="true"
                            class="form-control validate[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['valid'])===null||$tmp==='' ? '' : $tmp);?>
]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"
                            name="_data[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
]"
                            data-putto="#error-data-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
"
                            id="ckeditor-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['uid'])===null||$tmp==='' ? '' : $tmp);?>
"
                            ><?php echo $_smarty_tpl->tpl_vars['item']->value->_data[(($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp)];?>
</textarea>
                    </div>
                    <div class="erb" id="error-data-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type']=='image') {?>
                <div class="pull-bottom control-group">
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 :(*)</div>
                    <div class="input-append">
                        <input type="text" 
                            class="form-control validate[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['valid'])===null||$tmp==='' ? '' : $tmp);?>
]"
                            data-prompt-position="topLeft:0,20"
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_data[(($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp)]))===null||$tmp==='' ? '' : $tmp);?>
" 
                            name="_data[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
]" 
                            id="image-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['uid'])===null||$tmp==='' ? '' : $tmp);?>
"
                            >
                        <span class="add-on popovers" 
                              data-container="body" 
                              data-trigger="hover" 
                              data-placement="top" 
                              data-toggle="popover"
                              data-content="<img style='max-width:100px' src='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->_data[(($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp)], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '/libraries/images/no_image_available.png' : $tmp);?>
'/>" 
                              data-original-title="Image Preview"
                              title="Choose Image"
                            onclick="BrowseServer('#image-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['uid'])===null||$tmp==='' ? '' : $tmp);?>
')">
                            <i class="fa fa-image"></i>
                        </span>
                    </div>
                </div>
                <?php } else { ?>
                    <div class="code">Type:<?php echo $_smarty_tpl->tpl_vars['foo']->value['type'];?>
</div>
                <?php }?>
                <?php } ?>
            </fieldset>
            
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
