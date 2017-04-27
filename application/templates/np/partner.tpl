[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>OUR PARTNER</div>
            <span>Our Proud Projects</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <span>Partner</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex3-after">
    <div class="container" >
        <div class="row">
        [{foreach from=$partners item=foo}]
        <div class="col-xs-6 col-sm-4">
            <div class="nailthumb partner-item">
                <div class="nailthumb-figure-9-16">
                    <div class="nailthumb-container">
                        <img class="lazy" data-method='resize' src="[{$foo->_data.src|escape:'html'}]">
                    </div>
                </div>
            </div>
        </div>
        [{/foreach}]
        </div>
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]