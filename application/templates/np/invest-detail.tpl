[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">INVESTING IN VIETNAM</div>
        <ul>
            <li>Home</li>
            <li>Investing In VietNam</li>
            <li><a href="#">[{$category->cat_title|escape:'html'}]</a></li>
        </ul>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
<div>
[{foreach from=$contents item=foo}]
<div class="invest-box">
    <div class="desc">
        <div>
            <div>
                <div class="ckeditor">
                
                <h3 class="h3-1">[{$foo->title}]</h3>
                <div class="space-line"></div>
                <div class="space-line"></div>
                [{$foo->content_content}]
                </div>
            </div>
        </div>
    </div>
    <div class="thumb">
        <div class="cover" style="background-image:url([{$foo->content_thumb|escape:'html'}])"></div>
    </div>
</div>
[{/foreach}]
</div>

[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]