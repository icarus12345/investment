[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/widget/slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="container -space-linex2-after">
    <div class="row">
        <div class="col-md-8 pull-right">
            <div class="box-title">
                <div>WELCOME, N&P CONSTRUCTION - DESIGN  </div>
                <span>We give life to your home</span>
                
            </div>
            <p class="desc space-linex1-before space-linex1-after">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<br/><br/>
                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <div class="work-flow">
                <div class="title2">Our Process</div>
                <img style="max-width: 100%;-margin:auto;display:block" src="/assets/np/images/work-flow.png"/>
                <div><a href="#" class="btn btn-orange btn-lg">View Portfolio</a></div>
            </div>
            <div class="space-linex2"></div>
        </div>
        <div class="col-md-4 line-thumb space-linex2">
            <div class="cover" style="background-image:url(/assets/np/images/Layer-6.jpg"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/libraries/plugin/masonry.js"></script>
<div class="box-main cover" style="background-image:url(/assets/np/images/Layer-7.jpg">
    <div class="container">
        <div>
            <div class="box-title text-center">
                <div>Some Interesting facts</div>
                <span>about our work</span>
            </div>
            <p class="text-center pull-top">Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations. All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project. Our main goal is to illustrate his/hers values and individuality through design.</p>
            <div class="row report-nums">
                <div class="col-xs-6 col-sm-3 num">
                    <div>461</div>
                    <span>Finish project</span>
                </div>
                <div class="col-xs-6 col-sm-3 num">
                    <div>461</div>
                    <span>Success partner</span>
                </div>
                <div class="col-xs-6 col-sm-3 num">
                    <div>461</div>
                    <span>Happy customers</span>
                </div>
                <div class="col-xs-6 col-sm-3 num">
                    <div>461</div>
                    <span>Working hours</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container space-linex2-after space-linex2-before">
    <div class="row">
        <div class="col-md-8">
            <div class="box-title">
                <div>Some Interesting facts</div>
                <span>about our work</span>
            </div>
            <p class="desc space-linex1-before space-linex1-after">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<br/><br/>
                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <div class="row services-list">
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <img src="/assets/np/images/Shape-1.png">
                    <div class="line-clamp-f-2">construction and completion</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 line-thumb right">
            <div class="cover" style="background-image:url(/assets/np/images/Layer-8.jpg"></div>
        </div>
    </div>
</div>
<div class="gray-box space-linex3-before space-linex3-after">
    <div class="">
        <div class="box-title text-center">
            <div>OUR FEATURED WORKS</div>
            <span>Our Proud Projects</span>
        </div>
        <div class="space-linex2-before">
            <div id="container" class="boxs"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var featuredwork = [{$featuredwork|json_encode}]
</script>
<div class="white-box space-linex3-before space-linex3-after">
    <div class="container">
        <div class="box-title text-center">
            <div>NEWS & BLOGS</div>
            <span>Read about the latest trends and updates</span>
        </div>
        <div class="space-linex2-before">
            <div class="owl-carousel" id="owl-blog">
                    [{foreach from=$news item=foo}]
                    <div class="item">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="JavaScript:void(0)" class="nailthumb-container">
                                    <img class="lazy" src="[{$foo->_data.image|escape:'html'}]">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <!-- <div class="cat">Property Investment</div> -->
                            <div class="blog-title">
                                <div class="line-clamp-f-3">[{$foo->_title}]</div>
                            </div>
                            <div class="date">
                            By N&P 2016/12/12
                                <div class="pull-right">
                                <span class="fa fa-eye"></span> 123
                                </div>
                            </div>
                            <p class="line-clamp-f-3">[{$foo->_data.desc}]</p>
                        </div>
                    </div>
                    [{/foreach}]
                </div>
        </div>
    </div>
</div>