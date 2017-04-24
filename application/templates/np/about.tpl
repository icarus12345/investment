[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>ABOUT US</div>
            <span>Let us tell you about us </span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <a href="/about">About us</a>
            <span>[{$entrydetail->_title}]</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex1-after">
    <div class="container">
        <div class="row">
            <div class="pull-right col-md-9 space-linex2-after">
                <div class="blog-cover">
                    <img src="[{$entrydetail->_data.image}]">
                </div>
                <div>
                    <div class="h3-title">[{$entrydetail->_data.title}]</div>
                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css"/>
                    <div class="cke_editable">[{$entrydetail->_data.content}]</div>
                </div>
                
                <div class="clearfix"></div>
            </div>
            <div class="right-bar col-md-3 pull-left col-xs-12 space-linex2-after">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/about-list.tpl"}]
                <div class="cover" style="background-image:url(/assets/np/images/Layer-21.jpg">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/testimonial-slider.tpl"}]
                </div>
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/download.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/contact.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/business-hour.tpl"}]
            </div>
        </div>
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]