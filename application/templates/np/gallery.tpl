[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
        <div class="banner-box">
            <div class="tit">
                <div class="f32">GALLERY</div>
                <ul>
                    <li>Home</li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
        </div>
        <div class="gallery-box">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4 left">
                        <div class="tit f24">Vietnam Properties' <br/>Gallery</div>
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
                <p class="desc">
                    Mauris eleifend nisi justo, in volutpat magna scelerisque eget. In volutpat magna scelerisque eget. Interdum et malesuada.
                </p>
            </div>
            <div class="owl-carousel" id="owl-gallery"></div>
            <div class="owl-carousel" id="owl-gallery2"></div>
        </div>
        <script type="text/javascript">
            var data = [{$gallery_data|json_encode}];
        </script>

[{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/partner-slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]