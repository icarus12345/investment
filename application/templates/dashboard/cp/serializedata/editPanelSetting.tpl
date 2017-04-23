[{if $action.ispopup!=1}]
<div class="widget">
    <div class="modal-header">
        <h4>Entry <small>[{if $item}]Edit Item - <span class="code">[{$item->_alias|quotes_to_entities|default:''}]</span>[{else}]Add Item[{/if}]</small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
[{/if}]
        <input 
            type="hidden" 
            value="[{$item->data_id|default:''}]" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="data_type" 
                value="[{$item->data_type|default:$type|default:''}]"/>
            <div class="pull-bottom control-group">
                <div>Title :(*)</div>
                <input type="text" 
                    class="form-control validate[required,maxSize[120]]" 
                    data-prompt-position="topLeft:0,20"
                    placeholder="Title"
                    name="data_title"
                    [{if !$item}]
                    onblur="AliasTo(this,'#entryForm input[name=\'data_alias\']')"
                    [{/if}]
                    value="[{$item->data_title|quotes_to_entities|default:''}]"
                    />
            </div>
            [{if !$item}]
            <input type="hidden" name="data_alias" 
                value="[{$item->data_alias|quotes_to_entities|default:''}]"/>
            [{/if}]
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Category :(*)</div>
                        <div class="row-fluid">
                            <select 
                                name="data_category" 
                                class="form-control selectpicker validate[required]"
                                data-prompt-position="topLeft:0,20"
                                data-putto="#frm-err-category"
                                data-live-search="true"
                                data-size="10"
                                >
                                <option value="0">Nothing Selected</option>
                                [{if $cates|default:null}]
                                [{foreach from=$cates item=c}]
                                    <option 
                                        data-data="<span style='padding-left: [{$c->cat_level*20}]px;'>[{$c->cat_title|escape}]</span>"
                                        [{if $c->cat_id == $item->data_category}]selected="1"[{/if}]
                                        value="[{$c->cat_id|default:''}]">
                                            [{$c->cat_title|default:''}]
                                    </option>
                                [{/foreach}]
                                [{/if}]
                            </select>
                        </div>
                        <div id="frm-err-category"></div>
                    </div>
                </div>
                <div class="col-mb-3 half">
                    <div class="control-group pull-bottom">
                        <div>Data Type :</div>
                        [{if $item}]
                        <div class="form-control">
                            [{$item->data_data.type|default:''}]
                            <input type="hidden" name="_data[type]" 
                                value="[{$item->data_data.type|default:''}]"/>
                        </div>
                        [{else}]
                        <select name="data_data[type]" 
                            class="form-control selectpicker"
                            
                            >
                            <option value="string">String</option>
                            <option value="text" [{if $item->data_data.type|default:''=='text'}]selected[{/if}]>Text</option>
                            <option value="image" [{if $item->data_data.type|default:''=='image'}]selected[{/if}]>Image</option>
                            <option value="html" [{if $item->data_data.type|default:''=='html'}]selected[{/if}]>HTML</option>
                        </select>
                        [{/if}]
                    </div>
                </div>
                <div class="col-mb-3 half">
                    <div class="control-group pull-bottom">
                        <div>Status :</div>
                        <select name="data_status" class="form-control selectpicker">
                            <option value="true">Enable</option>
                            <option value="false" [{if $item->data_status|default:''=='false'}]selected[{/if}]>Disable</option>
                        </select>
                    </div>
                </div>
            </div>
            
            [{if $item && isset($entry_setting->_data.columns)}]
            <fieldset>
                <legend>Data Information</legend>
                [{foreach from=$entry_setting->_data.columns item=foo}]
                [{if $foo.type=='string'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <input type="text" 
                        class="form-control validate[[{$foo.valid|default:''}]]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="[{$foo.title|default:''}]"
                        name="data_data[[{$foo.column|default:''}]]"
                        value="[{$item->data_data[$foo.column|default:'']|quotes_to_entities|default:''}]"
                        />
                </div>
                [{elseif $foo.type=='text'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <textarea type="text" 
                        class="form-control validate[[{$foo.valid|default:''}]]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="[{$foo.title|default:''}]"
                        name="data_data[[{$foo.column|default:''}]]"
                        >[{$item->data_data[$foo.column|default:'']|quotes_to_entities|default:''}]</textarea>
                </div>
                [{elseif $foo.type=='html'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <div>
                        <textarea type="text" rows="10"
                            data-isEditor="true"
                            class="form-control validate[[{$foo.valid|default:''}]]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="[{$foo.title|default:''}]"
                            name="data_data[[{$foo.column|default:''}]]"
                            data-putto="#error-data-[{$foo.column|default:''}]"
                            id="ckeditor-[{$foo.column|default:''}]-[{$foo.uid|default:''}]"
                            >[{$item->data_data[$foo.column|default:'']}]</textarea>
                    </div>
                    <div class="erb" id="error-data-[{$foo.column|default:''}]"></div>
                </div>
                [{elseif $foo.type=='image'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <div class="input-append">
                        <input type="text" 
                            class="form-control validate[[{$foo.valid|default:''}]]"
                            data-prompt-position="topLeft:0,20"
                            value="[{$item->data_data[$foo.column|default:'']|quotes_to_entities|default:''}]" 
                            name="data_data[[{$foo.column|default:''}]]" 
                            id="image-[{$foo.column|default:''}]-[{$foo.uid|default:''}]"
                            >
                        <span class="add-on popovers" 
                              data-container="body" 
                              data-trigger="hover" 
                              data-placement="top" 
                              data-toggle="popover"
                              data-content="<img style='max-width:100px' src='[{$item->data_data[$foo.column|default:'']|escape:'html'|default:'/libraries/images/no_image_available.png'}]'/>" 
                              data-original-title="Image Preview"
                              title="Choose Image"
                            onclick="BrowseServer('#image-[{$foo.column|default:''}]-[{$foo.uid|default:''}]')">
                            <i class="fa fa-image"></i>
                        </span>
                    </div>
                </div>
                [{else}]
                    <div class="code">Type:[{$foo.type}]</div>
                [{/if}]
                [{/foreach}]
            </fieldset>
            [{/if}]
        </form>
[{if $action.ispopup!=1}]
            <div class="control-group">
                <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
    </div>
</div>
[{/if}]
