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
            <div class="pull-bottom control-group">
                <div>Title :(*)</div>
                <input type="text" 
                    class="form-control validate[required]" 
                    data-prompt-position="topLeft:0,20"
                    placeholder="Title"
                    name="_title"
                    value="[{$item->_title|quotes_to_entities|default:''}]"
                    />
            </div>
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
                                [{if $cates|default:null}]
                                [{foreach from=$cates item=c}]
                                    <option 
                                        data-data="<span style='padding-left: [{$c->cat_level*20}]px;'>[{$c->cat_title|escape}]</span>"
                                        [{if $c->cat_id == $item->_category}]selected="1"[{/if}]
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
                        class="form-control validate[[{if $foo.required|default:''}]required,[{/if}]maxSize[255]]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="[{$foo.title|default:''}]"
                        name="_data[[{$foo.column|default:''}]]"
                        value="[{$item->_data[$foo.column|default:'']|quotes_to_entities|default:''}]"
                        />
                </div>
                [{/if}]

                [{if $foo.type=='text'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <textarea type="text" 
                        class="form-control validate[[{if $foo.required|default:''}]required,[{/if}]maxSize[255]]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="[{$foo.title|default:''}]"
                        name="_data[[{$foo.column|default:''}]]"
                        >[{$item->_data[$foo.column|default:'']|quotes_to_entities|default:''}]</textarea>
                </div>
                [{/if}]

                [{if $foo.type=='html'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <div>
                        <textarea type="text" 
                            data-isEditor="true"
                            class="form-control validate[[{if $foo.required|default:''}]required[{/if}]]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="[{$foo.title|default:''}]"
                            name="_data[[{$foo.column|default:''}]]"
                            data-putto="#error-data-[{$foo.column|default:''}]"
                            id="ckeditor-[{$foo.column|default:''}]-[{$foo.uid|default:''}]"
                            >[{$item->_data[$foo.column|default:'']}]</textarea>
                    </div>
                    <div class="erb" id="error-data-[{$foo.column|default:''}]"></div>
                </div>
                [{/if}]


                [{if $foo.type=='image'}]
                <div class="pull-bottom control-group">
                    <div>[{$foo.title|default:''}] :(*)</div>
                    <div class="input-append">
                        <input type="text" 
                            class="form-control validate[[{if $foo.required|default:''}]required,[{/if}]maxSize[255]]"
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
                [{/if}]
                [{/foreach}]
            </fieldset>
            
            <div class="control-group">
                <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
        </form>
[{if $action.ispopup!=1}]
    </div>
</div>
[{/if}]
