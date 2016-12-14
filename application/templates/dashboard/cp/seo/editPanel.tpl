
<input 
    type="hidden" 
    value="[{$item->seo_id|default:''}]" 
    id="SeoEntryId"
    />
<form name="seoForm" id="seoForm" target="integration_asynchronous">
    <input type="hidden" name="seo_key" id="seo_key" 
           value="[{$item->seo_key|default:$seo_key|default:''}]"/>

    <div class="pull-bottom control-group">
        <div>Title :(*)</div>
        <input type="text" class="form-control validate[required,minSize[4],maxSize[255]]" 
               placeholder="Title"
               name="seo_social_title"
               data-prompt-position="topLeft:0,20"
               value="[{$item->seo_social_title|quotes_to_entities|default:''}]"
               />
    </div>
    <div class="pull-bottom control-group">
        <div>Image :(*)</div>
            <div class="input-append">
                <input type="text" 
                    class="form-control validate[required,maxSize[255]]"
                    data-prompt-position="topLeft:0,20"
                    value="[{$item->seo_social_image|escape:'html'|default:''}]" 
                    name="seo_social_image" 
                    id="seo_social_image"
                    >
                <span class="add-on popovers" 
                      data-container="body" 
                      data-trigger="hover" 
                      data-placement="top" 
                      data-toggle="popover"
                      data-content="<img style='max-width:100px' src='[{$item->seo_social_image|escape:'html'|default:'/libraries/images/no_image_available.png'}]'/>" 
                      data-original-title="Image Preview"
                      title="Choose Image"
                    onclick="BrowseServer('#seo_social_image')">
                    <i class="fa fa-image"></i>
                </span>
            </div>
    </div>   
    <div class="control-group pull-bottom">
        <div>
            Desc :
        </div>
        <textarea class="form-control de-desc" 
                  rows="2"
                  name="seo_social_desc"
                  >[{$item->seo_social_desc|quotes_to_entities|default:''}]</textarea>

    </div>
    <div class="control-group pull-bottom">
        <div>
            Keyword :
        </div>
        <textarea class="form-control de-desc" 
                  rows="2"
                  name="seo_social_keyword"
                  >[{$item->seo_social_keyword|quotes_to_entities|default:''}]</textarea>
    </div>
</form>
