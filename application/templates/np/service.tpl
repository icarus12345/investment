[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>OUR SERVICES</div>
            <span>Our Proud Projects</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <span>Services</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex3-after">
    <div class="container" data-sole="1">
        [{foreach from=$services item=foo}]
        <div class="custom-box">
            <div class="thumb">
                <a href="/services/[{$foo->data_alias|escape:'html'}]" class="nailthumb-container">
                    <img class="lazy" data-original="[{$foo->data_data.thumb|escape:'html'}]">
                </a>
            </div>
            <div class="content">
                <div>
                    <a href="/services/[{$foo->data_alias|escape:'html'}]" class="box-title">
                        <div>[{$foo->data_title|escape:'html'}]</div>
                        <span>[{$foo->data_data.subtitle|escape:'html'}]</span>
                    </a>
                    <p class="pull-top pull-bottom">[{$foo->data_data.desc|escape:'html'}]</p>
                    [{$foo->data_data.links}]
                </div>
            </div>
        </div>
        [{/foreach}]
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]