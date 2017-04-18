[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">OUR SERVICES</div>
        <ul>
            <li>Home</li>
            <li>Services</li>
            <li><a href="#">[{$category->cat_title|escape:'html'}]</a></li>
        </ul>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
<div class="gray-box">
    <div class="space-line"></div>
    <div class="space-line"></div>
    <div class="container">
    [{foreach from=$contents item=foo}]
        <div class="row service-box">
            <div class="col-sm-6 thumb">
                <img style="max-width:100%" src="[{$foo->content_thumb|escape:'html'}]">
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
            <div class="col-sm-6">
                <div class="ckeditor">
                    <h4>[{$foo->content_title|escape:'html'}]</h4>
                    <div class="space-line"></div>
                    [{$foo->content_content}]
                </div>
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
        </div>
    [{/foreach}]
    </div>
</div>
[{if $category->cat_id==469}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/stepbystep.tpl"}]
[{else}]
<div class="white-box">
    <div class="container step-by-step text-center">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <h2>SEND INFO GET ADVICE FROM <span class="a">VIETNAM PROPERTY INVESTMENT</span> TEAM</h2>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <img src="/assets/investment/images/hr-gray.png">
        <div class="space-line"></div>
        <div class="space-line"></div>
        [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/sendrequest.tpl"}]
        <div class="space-line"></div>
        <div class="space-line"></div>
    </div>
</div>
[{/if}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/partner-slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]