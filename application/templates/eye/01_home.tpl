[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/widget/01_slider.tpl"}]
        <div class="container services-box">
            [{for $i=0 to 2}]
            [{assign "foo" $aContents[$i]}]
            <div class="col-sm-4">
                <div>
                    <img src="[{$foo->_data.image|escape:'html'}]"/>
                    <div class="title">[{$foo->_title|escape:'html'}]</div>
                    <p class="line-clamp-f-4">[{$foo->_data.desc|escape:'html'}]</p>
                    <a href="[{'content/'|cat:$foo->_alias|escape:'html'|base_url}]" class="reaad-more a">Read more</a>
                </div>
            </div>
            [{/for}]
        </div>
        <div class="about-box">
            [{assign "foo" $aContents[3]}]
            <div class="left cover" style="background-image:url('[{$foo->_data.image|escape:'html'}]')"></div>
            <div class="right">
                <div>
                    <div>
                        <div class="h2">OUR <span>STORY</span></div>
                        <div class="desc">[{$foo->_data.desc|escape:'html'}]</div>
                        <p>[{$foo->_data.content|escape:'html'}]</p>
                    </div>
                </div>
            </div>
        </div>
        [{assign "foo" $aAbouts[0]}]
        <div class="accreditation cover" style="background-image:url('[{$foo->_data.image|escape:'html'}]')">
            <div class="container">
                <div class="tit">[{$foo->_title|escape:'html'}]</div>
                <p class="lab">[{$foo->_data.desc|escape:'html'}]</p>
                <a href="[{'about/'|cat:$foo->_alias|escape:'html'|base_url}]" class="btn btn-default"><span>Read more</span></a>
            </div>
        </div>
        <div class="blog-box">
            <div class="container">
                <div class="text-center">
                    <div class="h2">Latest <span>News</span></div>
                    <p class="desc">
                        Adelaide Eye & Laser Centre's ISO/NSQHS Certification review took place on the 12th April 2016.We have just received...
                    </p>
                </div>
                <div class="owl-carousel" id="owl-blog">
                    [{foreach from=$news_data item=foo key=i}]
                    <div class="item blog-item">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="[{'news/'|cat:$foo->_alias|escape:'html'|base_url}]" class="nailthumb-container">
                                    <img class="lazy" src="[{$foo->_data.image|escape:'html'}]">
                                </a>
                            </div>
                        </div>
                        <div class="date"><div>[{$foo->_insert|date_format:"%d"}]</div>[{$foo->_insert|date_format:"%b"}]</div>
                        <div class="info">
                            <div class="tit">[{$foo->_title|escape:'html'}]</div>
                            <div class="desc"><div class="line-clamp-f-3">[{$foo->_data.desc|escape:'html'}]</div></div>
                            <a href="[{'news/'|cat:$foo->_alias|escape:'html'|base_url}]" class='a'>Read More</a>
                        </div>
                    </div>
                    [{/foreach}]
                </div>

            </div>
        </div>
        <div class="adv">
            <div class="container">
                <div class="tit">[{$aSetting['make-version']->_title|escape:'html'}]</div>
                <p class="lab">[{$aSetting['make-version']->_data.desc|escape:'html'}]</p>
                <a href="[{$aSetting['make-version']->_data.url|escape:'html'}]" class="btn btn-default"><span>BOOK NOW</span></a>
            </div>
        </div>
        <div class="owl-carousel" id="owl-testimonial">
            [{foreach from=$aTestimonial item=foo key=i}]
            <div class="item quote">
                <p>[{$foo->_data.desc|escape:'html'}]</p>

                <div>[{$foo->_title|escape:'html'}]</div>
                <span>[{$foo->_data.position|escape:'html'}]</span>
            </div>
            [{/foreach}]
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
