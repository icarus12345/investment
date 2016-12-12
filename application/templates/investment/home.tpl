[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/slider.tpl"}]
        <div class="about-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-4 left">
                        <div class="tit f24">ABOUT <br/>PROPERTY INVESTMENT</div>
                    </div>
                    <div class="col-sm-7 col-md-8 right">
                    <p>
                        Linkedproperties is a small group of individuals that have experienced property investment in Australia, UK and Vietnam for over 5+ years. Property investments is our passion and we understand the hurdles when you are seeking for information from the countries of interests, but have lack of information or who to go to. This website is dedicated for individuals with interest to invest in properties in Vietnam.
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="out-service-box cls">
            <div class="left cover" style="background-image:url(assets/investment/images/service-bg.jpg)">
                <div class="left-content">
                    <div class="lab f24">INVESTING IN VIETNAM</div>
                    <div class="tit">Welcoming Investors to the world of Vietnam property investment.
We showcase and share our experiences and give you up to date information on where the market is heading.</div>
                    <a href="/investing-vietnam" class="btn btn-warning"><span>VIEW MORE</span></a>
                </div>
            </div>
            <div class="right">
                <div class="tit f24">OUR SERVICES</div>
                <div class="">
                    [{foreach from=$investment_cates item=foo}]
                    <a href='/investing-vietnam/[{$foo->cat_alias|escape:'html'}]' class="item">
                        <div>[{$foo->cat_title|escape:'html'}]</div>
                    </a>
                    [{/foreach}]
                </div>
            </div>
        </div>
        <div class="gallery-box">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4 left">
                        <div class="tit f24">GALLERY ABOUT <br/>PROPERTY IN VIETNAM</div>
                    </div>
                    <div class="col-md-8 right">
                        <ul class="gal-tab nav nav-tabs">
                            <li class="active"><a href='JavaScript:void(0)' onclick='initGallery()' data-toggle="tab" href="#home">All Gallery</a>
                            [{foreach from=$gallery_cates item=foo}]
                            <li><a href='JavaScript:void(0)' onclick='initGallery([{$foo->cat_id|escape:'html'}])' data-toggle="tab" href="#home">[{$foo->cat_title|escape:'html'}]</a>
                            [{/foreach}]
                        </ul>
                    </div>
                </div>
                <p class="desc" style="max-width:480px">
                    Mauris eleifend nisi justo, in volutpat magna scelerisque eget. In volutpat magna scelerisque eget. Interdum et malesuada.
                </p>
            </div>
            <div class="owl-carousel" id="owl-gallery"></div>
            <div class="owl-carousel" id="owl-gallery2"></div>
        </div>
        <script type="text/javascript">
            var data = [{$gallery_data|json_encode}];
        </script>
        <div class="blog-box">
            <div class="container">
                <div class="text-center">
                    <div class="tit f24">BLOG POST</div>
                    <p class="desc" style="max-width:720px;margin:auto">
                        We always update the latest news about the market of property investment in Vietnam, with hope will help you are the informations in investment market at Vietnam.eleifend nisi justo.
                    </p>
                </div>
                <div class="owl-carousel" id="owl-blog">
                    [{foreach from=$feature_blogs item=foo}]
                    <div class="item">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="/blogs/[{$foo->content_alias|escape:'html'}]" class="nailthumb-container">
                                    <img class="lazy" src="[{$foo->content_thumb|escape:'html'}]">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="cat">[{$foo->cat_title|escape:'html'}]</div>
                            <div class="title"><a href="/blogs/[{$foo->content_alias|escape:'html'}]"><div class="line-clamp-f-2">[{$foo->content_title|escape:'html'}]</div></a></div>
                            <div class="date">
                                <span class="fa fa-eye"></span> 0 &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fa fa-comments"></span> 0
                                <div class="pull-right">
                                    <span class="fa fa-calendar"></span> [{$foo->content_insert|date_format:'%e %b,%Y'}]
                                </div>
                            </div>
                        </div>
                    </div>
                    [{/foreach}]
                </div>

            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/partner-slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]