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
            value="[{$item->data_id|default:''}]" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="data_type" 
                value="[{$item->data_type|default:$type|default:''}]"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="data_title"
                            [{if $item->data_lock!='true'}]
                            onblur="AliasTo(this,'#entryForm input[name=\'data_data[alias]\']')"
                            [{/if}]
                            value="[{$item->data_title|quotes_to_entities|default:''}]"
                            />
                    </div>
                </div>
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Alias :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            [{if $item->data_lock=='true'}]
                            disabled=1
                            [{/if}]
                            data-prompt-position="topLeft:0,20"
                            placeholder="Alias"
                            name="data_data[alias]"
                            value="[{$item->data_data.alias|quotes_to_entities|default:''}]"
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
                                value="[{$item->data_data.thumb|escape:'html'|default:''}]" 
                                name="data_data[thumb]" 
                                id="data_thumb"
                                >
                            <span class="add-on popovers" 
                                data-container="body" 
                                data-trigger="hover" 
                                data-placement="top" 
                                data-toggle="popover"
                                data-data="<img style='max-width:100px' src='[{$item->data_data.thumb|escape:'html'|default:'/libraries/images/image_available.svg'}]'/>" 
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
                            <option value="false" [{if $item->data_status|default:''=='false'}]selected[{/if}]>Disable</option>
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
                        >[{$item->data_data.brief|quotes_to_entities|default:''}]</textarea>
                        
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="data_data[desc]"
                        >[{$item->data_data.desc|quotes_to_entities|default:''}]</textarea>
                        
            </div>
            
            <div class="control-group pull-bottom">
                <div>
                    Content (*):
                </div>
                <div>
                    [{if $ci->agent->is_mobile()}]
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    [{else}]
                    <textarea class="form-control validate[required]" 
                            rows="3"
                            name="data_data[content]"
                            id="data_data_content"
                            data-isEditor="true"
                            data-putto=".error-content" >[{$item->data_data.content|quotes_to_entities|default:''}]</textarea>
                    [{/if}]
                </div>
                        
                <div class="erb error-content"></div>
            </div>
            <div class="control-group">
            <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
            <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
        </form>
[{if $action.ispopup!=1}]
    </div>
</div>
[{/if}]
