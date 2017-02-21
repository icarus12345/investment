[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Meet The Team</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Meet The Team
            </div>
        </div>
        <div class="about-list cls meet-the-team">
            <div class="container">
                <div class="row">
                    [{foreach from=$aTeams item=foo key=i}]
                    <div class="item col-sm-6 col-md-4">
                        <a href="#" class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <div class="nailthumb-container">
                                    <img class="lazy" src="[{$foo->_data.image|escape:'html'}]"/>
                                </div>
                            </div>
                        </a>
                        <div>
                            <div class="tit">[{$foo->_title|escape:'html'}] / <span>[{$foo->_data.position|escape:'html'}]</span></div>
                            <p>[{$foo->_data.desc|escape:'html'}]</p>
                        </div>
                    </div>
                    [{/foreach}]
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
