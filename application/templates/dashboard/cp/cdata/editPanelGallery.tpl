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
                
            </div>
            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="data_data[desc]"
                        data-putto=".error_desc" >[{$item->data_data.desc|quotes_to_entities|default:''}]</textarea>
                        
                <div class="erb error_desc"></div>
            </div>
            
            <div class="control-group pull-bottom">
                <div>
                    Overview (*):
                </div>
                <div>
                    [{if $ci->agent->is_mobile()}]
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    [{else}]
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[overview]"
                            id="data_data_overview"
                            data-putto=".error_overview" >[{$item->data_data.overview}]</textarea>
                    [{/if}]
                </div>
                        
                <div class="erb error_overview"></div>
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Location (*):
                </div>
                <div>
                    [{if $ci->agent->is_mobile()}]
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    [{else}]
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[location]"
                            id="data_data_location"
                            data-putto=".error_location" >[{$item->data_data.location}]</textarea>
                    [{/if}]
                </div>
                        
                <div class="erb error_location"></div>
            </div>

            <div class="control-group pull-bottom">
                <div>
                    Facilities (*):
                </div>
                <div>
                    [{if $ci->agent->is_mobile()}]
                    <div>
                        <div class="code">Editor does not support in Mobile, please user desktop browser to edit.</div>
                    </div>
                    [{else}]
                    <textarea class="form-control validate[required]" 
                            rows="5"
                            data-isEditor="true"
                            name="data_data[facilcities]"
                            id="data_data_facilcities"
                            data-putto=".error-facilcities" >[{$item->data_data.facilcities}]</textarea>
                    [{/if}]
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
                                value="[{$item->data_data.image1_title|quotes_to_entities|default:''}]"
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
                                    value="[{$item->data_data.image1_src|escape:'html'|default:''}]" 
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
                            >[{$item->data_data.image1_desc|quotes_to_entities|default:''}]</textarea>
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
                                value="[{$item->data_data.image2_title|quotes_to_entities|default:''}]"
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
                                    value="[{$item->data_data.image2_src|escape:'html'|default:''}]" 
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
                                value="[{$item->data_data.image3_title|quotes_to_entities|default:''}]"
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
                                    value="[{$item->data_data.image3_src|escape:'html'|default:''}]" 
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
                                value="[{$item->data_data.image4_title|quotes_to_entities|default:''}]"
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
                                    value="[{$item->data_data.image4_src|escape:'html'|default:''}]" 
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
[{if $action.ispopup!=1}]
    </div>
</div>
[{/if}]
