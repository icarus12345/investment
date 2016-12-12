[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">INVESTING IN VIETNAM</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Investing In VietNam</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <h2>WHAT WE DO ?</h2>
        <img src="/assets/investment/images/hr.png">
        <p class="gray pull-top pull-bottom">Property investments is our passion and we understand the hurdles when you are seeking for information from the countries of interests, but have lack of information or who to go to. This website is dedicated for individuals with interest to invest in properties in Vietnam; one of the fastest growing economy in South East Asia. Vietnam has opened its economy to the world in the past 15 years with every changing regulations to become one of the most competitive trading market in South East Asia.</p>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <div class="row invest-items">
            [{foreach from=$investment_cates item=foo}]
            <div class="col-sm-6 col-md-4">
                
                <div class="nailthumb">
                    <div class="nailthumb-figure-75">
                        <div class="nailthumb-container">
                            <img class="lazy" src="[{$foo->cat_thumb|escape:'html'}]">
                        </div>
                        <a href="/investing-vietnam/[{$foo->cat_alias|escape:'html'}]" 
                            
                            class="nailthumb-mark">
                            <div class="f20">[{$foo->cat_title|escape:'html'}]</div>
                        </a>
                    </div>
                </div>
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
            [{foreachelse}]
            <div class="text-center" style="padding:80px 0">No data to display.</div>
            [{/foreach}]
            
        </div>
    </div>
</div>


[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]