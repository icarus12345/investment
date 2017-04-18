[{if $action.ispopup!=1}]
<div class="widget">
    <div class="modal-header">
        <h4>Entry <small>[{if $item}]Edit Item[{else}]Add Item[{/if}]</small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
[{/if}]
        <input 
            type="hidden" 
            value="[{$item->_id|default:''}]" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="_type" 
                value="[{$item->_type|default:$type|default:''}]"/>
            
            <input type="hidden" name="_alias" 
                value="[{$item->_alias|quotes_to_entities|default:''}]"/>
            <div class="row half">
                <div class="col-mb-9 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required,maxSize[120]]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="_title"
                            [{if $item->content_lock!='true'}]
                            onblur="AliasTo(this,'#entryForm input[name=\'_alias\']')"
                            [{/if}]
                            value="[{$item->_title|quotes_to_entities|default:''}]"
                            />
                    </div>
                </div>
                <div class="col-mb-3 half">
                    <div class="control-group pull-bottom">
                        <div>Status :</div>
                        <select name="_status" class="form-control selectpicker">
                            <option value="true">Enable</option>
                            <option value="false" [{if $item->image_status|default:''=='false'}]selected[{/if}]>Disable</option>
                        </select>
                    </div>
                </div>
            </div>

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
                        name="_data[[{$foo.column|default:''}]]"
                        value="[{$item->_data[$foo.column|default:'']|quotes_to_entities|default:''}]"
                        />
                </div>
                [{elseif $foo.type=='text'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <textarea type="text" 
                        class="form-control validate[[{$foo.valid|default:''}]]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="[{$foo.title|default:''}]"
                        name="_data[[{$foo.column|default:''}]]"
                        >[{$item->_data[$foo.column|default:'']|quotes_to_entities|default:''}]</textarea>
                </div>
                [{elseif $foo.type=='html'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <div>
                        <textarea type="text" 
                            data-isEditor="true"
                            class="form-control validate[[{$foo.valid|default:''}]]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="[{$foo.title|default:''}]"
                            name="_data[[{$foo.column|default:''}]]"
                            data-putto="#error-data-[{$foo.column|default:''}]"
                            id="ckeditor-[{$foo.column|default:''}]-[{$foo.uid|default:''}]"
                            >[{$item->_data[$foo.column|default:'']}]</textarea>
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
                            value="[{$item->_data[$foo.column|default:'']|quotes_to_entities|default:''}]" 
                            name="_data[[{$foo.column|default:''}]]" 
                            id="image-[{$foo.column|default:''}]-[{$foo.uid|default:''}]"
                            >
                        <span class="add-on popovers" 
                              data-container="body" 
                              data-trigger="hover" 
                              data-placement="top" 
                              data-toggle="popover"
                              data-content="<img style='max-width:100px' src='[{$item->_data[$foo.column|default:'']|escape:'html'|default:'/libraries/images/no_image_available.png'}]'/>" 
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
            
        </form>
[{if $action.ispopup!=1}]
            <div class="control-group">
                <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
    </div>
</div>
[{/if}]
