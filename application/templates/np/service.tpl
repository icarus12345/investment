[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover">
    <div class="container">
        
    </div>
</div>
<div class="white-box space-linex3-before space-linex3-after">
    <div class="container" data-sole="1">
        [{foreach from=$services item=foo}]
        <div class="custom-box">
            <div class="thumb">
                <div class="nailthumb-container">
                    <img class="lazy" data-original="[{$foo->data_data.thumb|escape:'html'}]">
                </div>
            </div>
            <div class="content">
                <div>
                    <div class="box-title">
                        <div>[{$foo->data_title|escape:'html'}]</div>
                        <span>[{$foo->data_data.subtitle|escape:'html'}]</span>
                    </div>
                    <p class="pull-top pull-bottom">[{$foo->data_data.desc|escape:'html'}]</p>
                    [{$foo->data_data.links}]
                </div>
            </div>
        </div>
        [{/foreach}]
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]