[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>Project</div>
            <span>Let look at our project</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            [{if $entrydetail}]
            <a href="/project">Project</a>
            <span>[{$entrydetail->_title}]</span>
            [{else}]
            <span>Project</span>
            [{/if}]
        </div>
    </div>
</div>
<div class="gray-box space-linex3-before space-linex3-after">
    <div class="container">
        [{if $entrydetail}]
        <div class="owl-carousel" id="owl-product" role="dot-orange">
            [{foreach from=$images item=foo}]
            <div class="item cover" style="background-image:url([{$foo->_data.image|escape:'html'}])">
                
            </div>
            [{/foreach}]
        </div>
        <div class="h3-title text-uppercase">[{$entrydetail->_title}]</div>
        <div class="row">
            <div class="col-md-9 space-linex2-after col-xs-12">
                <div>

                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css"/>
                    <div class="ckeditor">[{$entrydetail->_data.content}]</div>
                </div>
            </div>
            <div class="col-md-3 space-linex2-after col-xs-12">
                <ul class="arrow-list">
                    <li>Category: [{$entrydetail->cat_title}]</li>
                    <li>Date: [{$entrydetail->_insert}]</li>
                    <li>Client: [{$entrydetail->_data.subtitle}]</li>
                    <li>Address: [{$entrydetail->_data.address}]</li>
                </ul>
            </div>
        </div>
        <div class=" space-line-before space-line-after">
            [{if $preventry}]
            <a href="/project/[{$preventry->_alias}]" class="a-orange">Prev Project</a>
            [{/if}]
            &nbsp;
            [{if $nextentry}]
            <a href="/project/[{$nextentry->_alias}]" class="pull-right a-orange">Next Project</a>
            [{/if}]
        </div>
        [{else}]
        <div class="box-title text-center">
            <div>N&P PROJECT PORTFOLIO</div>
            <span>Our Proud Projects</span>
        </div>
        <div class="text-center project-btns">
            <a href="/project" class="[{if !$catdetail}]btn-warning[{/if}] btn btn-min">All</a>
            [{foreach from=$categorys item=foo}]
            <a href="/project/[{$foo->cat_alias|escape:'html'}]" class="btn  btn-min [{if $catdetail->cat_id == $foo->cat_id}]btn-warning[{else}]btn-none[{/if}]">[{$foo->cat_title|escape:'html'}]</a>
            [{/foreach}]
        </div>
        <div class="space-linex2-before">
            [{if $featuredwork2}]
            <div id="container2" class="boxs hasgutter"></div>
            [{else}]
            <h2 class="text-center" style="padding:80px 0">No data to display.</h2>
            [{/if}]
        </div>
        <script type="text/javascript" src="/libraries/plugin/masonry.js"></script>
        <script type="text/javascript">
            var featuredwork2 = [{$featuredwork2|json_encode}]
        </script>
        [{/if}]
    </div>
</div>

[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]