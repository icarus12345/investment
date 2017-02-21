[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Latest News</div>
        </div>
        <div class="becu">
            <div class="container">
            Home / Latest News
            </div>
        </div>
        <div class="latest-news">
            <div class="container">
                <div class="row">
                    [{foreach from=$entrys item=foo key=i}]
                    <div class="item news-item">
                        <div class="col-sm-5">
                            <div class="row">
                            <div class="nailthumb">
                                <div class="nailthumb-figure">
                                    <a href="[{'news/'|cat:$foo->_alias|escape:'html'|base_url}]" class="nailthumb-container">
                                        <img class="lazy" src="[{$foo->_data.image|escape:'html'}]">
                                    </a>
                                </div>
                            </div>
                            <div class="date"><div>[{$foo->_insert|date_format:"%d"}]</div>[{$foo->_insert|date_format:"%b"}]</div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="info">
                                <div class="tit">[{$foo->_title|escape:'html'}]</div>
                                <div class="desc"><div class="line-clamp-f-5">[{$foo->_data.desc|escape:'html'}]</div></div>
                                <a class='a' href="[{'news/'|cat:$foo->_alias|escape:'html'|base_url}]">Read more</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    [{/foreach}]
                    <div class="clearfix"></div>
                    <div class=" text-center">
                        [{$paging}]
                    </div>
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
