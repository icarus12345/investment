[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">[{$content_detail->_title|escape:'html'}]</div>
        </div>
        <div class="becu">
            <div class="container">
            About / [{$content_detail->_title|escape:'html'}]
            </div>
        </div>
        <div class="about-detail">
            <div class="container">
                <div class="row">
                    [{if $content_detail->_data.image}]
                    <img src="[{$content_detail->_data.image|escape:'html'}]" style="width: 100%" />
                    [{/if}]
                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css" >
                    <div class="ckeditor" style="padding:40px 0">
                        [{$content_detail->_data.content}]
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
