[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">[{$content_detail->_title|escape:'html'}]</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Patients / [{$content_detail->_title|escape:'html'}]
            </div>
        </div>
        <div class="about-detail">
            <div class="container">
                <div class="row">
                    [{if $content_detail->_data.image}]
                    <img src="[{$content_detail->_data.image|escape:'html'}]" style="display:block;margin:auto;max-width: 100%" />
                    [{/if}]
                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css" >
                    <div class="ckeditor" style="padding:40px 0">
                        [{$content_detail->_data.content}]
                        <div class="clearfix"></div>
                    </div>
                    <div class="about-control">
                    <a href="[{'patients/'|cat:$prev->_alias|escape:'html'|base_url}]" class="about-prev">[{$prev->_title|escape:'html'|default:'&nbsp;'}]</a>
                    <a href="/patients" class="about-menu"></a>
                    <a href="[{'patients/'|cat:$next->_alias|escape:'html'|base_url}]" class="about-next">[{$next->_title|escape:'html'|default:'&nbsp;'}]</a>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
