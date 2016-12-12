[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">ABOUT US</div>
        <ul>
            <li>Home</li>
            <li><a href="#">About us</a></li>
        </ul>
    </div>
</div>
        <div class="gray-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-bottom pull-top">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="JavaScript:void(0)" class="nailthumb-container">
                                    <img class="lazy" src="[{$cdata->data_data.thumb|escape:'html'}]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pull-bottom pull-top">
                        <h4 class="a"><i>[{$cdata->data_title|escape:'html'}]</i></h4>
                        <div class="pull-bottom pull-top"><strong>[{$cdata->data_data.brief|escape:'html'}]</strong></div>
                        <p class="word-wrap gray">[{$cdata->data_data.desc|escape:'html'}]</p>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <img src="/assets/investment/images/sign.png" class="pull-right pull-bottom pull-top">
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
        <div class="white-box">
            <div class="container">
                <div class="ckeditor">
                    [{$cdata->data_data.content}]
                </div>
            </div>
        </div>
        <div class="owl-carousel" id="owl-testimonial">
            [{foreach from=$testimonials item=foo}]
            <div class="item cover" style="background-image:url([{$foo->image_src|escape:'html'}])">
                <div class="container">
                    <div class="word-wrap"><h4>[{$foo->image_title|escape:'html'}]</h4><br/>[{$foo->image_desc|escape:'html'}]</div>
                </div>
            </div>
            [{/foreach}]
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/partner-slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]