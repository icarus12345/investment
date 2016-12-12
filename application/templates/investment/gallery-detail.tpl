[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
        <div class="banner-box">
            <div class="tit">
                <div class="f32">GALLERY</div>
                <ul>
                    <li>Home</li>
                    <li>Gallery</li>
                    <li><a href="#">[{$gallery_data->data_title|escape:'html'}]</a></li>
                </ul>
            </div>
        </div>
        <div class="gallery-detail-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-7">
                        <div class="gallery-left">
                            <div class="nailthumb">
                                <div class="nailthumb-figure-75">
                                    <div class="nailthumb-container ">
                                        <img class="lazy" src="[{$gallery_data->data_data.image1_src|escape:'html'}]">
                                    </div>
                                    <a  href="[{$gallery_data->data_data.image1_src|escape:'html'}]"
                                        data-fancybox-group="gallery"
                                        title="[{$gallery_data->data_data.image1_title|escape:'html'}]" 
                                        class="nailthumb-mark fancybox">
                                        <div>
                                            <h3 class="h3-1">[{$gallery_data->data_data.image1_title|escape:'html'}]</h3>
                                            [{$gallery_data->data_data.image1_desc|escape:'html'}]
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-75">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="[{$gallery_data->data_data.image2_src|escape:'html'}]">
                                            </div>
                                            <a href="[{$gallery_data->data_data.image2_src|escape:'html'}]" 
                                                data-fancybox-group="gallery"
                                                title="[{$gallery_data->data_data.image2_title|escape:'html'}]" 
                                                class="nailthumb-mark fancybox">
                                                <div>[{$gallery_data->data_data.image2_title|escape:'html'}]</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-75">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="[{$gallery_data->data_data.image3_src|escape:'html'}]">
                                            </div>
                                            <a href="[{$gallery_data->data_data.image3_src|escape:'html'}]" 
                                                data-fancybox-group="gallery"
                                                title="[{$gallery_data->data_data.image3_title|escape:'html'}]" 
                                                class="nailthumb-mark fancybox">
                                                <div>[{$gallery_data->data_data.image3_title|escape:'html'}]</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="nailthumb">
                                <div class="nailthumb-figure-9-16">
                                    <div class="nailthumb-container">
                                        <img class="lazy" src="[{$gallery_data->data_data.image4_src|escape:'html'}]">
                                    </div>
                                    <a href="[{$gallery_data->data_data.image4_src|escape:'html'}]"
                                        data-fancybox-group="gallery"
                                        title="[{$gallery_data->data_data.image4_title|escape:'html'}]" 
                                        class="nailthumb-mark fancybox">
                                        <div>[{$gallery_data->data_data.image4_title|escape:'html'}]</div>
                                    </a>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-5">
                        <div class="gallery-right">
                            <h4 class="h4-1">OVERVIEW</h4>
                            <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                            <div class="ckeditor pull-top pull-bottom gray">[{$gallery_data->data_data.overview}]</div>
                            <hr/>
                            <h4 class="h4-1">LOCATION</h4>
                            <div class="ckeditor pull-top pull-bottom gray">[{$gallery_data->data_data.location}]</div>
                            <hr/>
                            <h4 class="h4-1">FACILITIES</h4>
                            <div class="ckeditor pull-top pull-bottom gray">[{$gallery_data->data_data.facilcities}]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/libraries/plugin/fancy/source/jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="/libraries/plugin/fancy/source/jquery.fancybox.css">
        <script type="text/javascript">
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
        </script>
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]