[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">TERMS AND CONDITION</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Terms and Condition</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                <div class="blog-item">
                    <div class="tit-h1">TERMS AND <span>CONDITIONS</span></div>
                    <div class="gray container">
                        <div class="col-sm-12 pull-bottom">
                            <div class="space-line"></div>
                            <div class="hr2"></div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <i>[{$content_detail->content_desc|escape:'html'}]</i>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                        </div>
                        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                        <div class="ckeditor col-sm-12 pull-bottom">
                            [{$content_detail->content_content}]
                            <br/>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pull-bottom pull-top">
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-recent.tpl"}]
            </div>
        </div>
    </div>
</div>


[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]