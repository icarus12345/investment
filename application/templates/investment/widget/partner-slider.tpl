[{if $partners}]
<div class="partner-box">
    <div class="container">
        <div class="text-center">
            <div class="tit f24">OUR PARTNER</div>
        </div>
        <div class="owl-carousel" id="owl-partner">
            [{foreach from=$partners item=foo}]
            <div class="item">
                <div class="nailthumb">
                    <div class="nailthumb-figure-9-16">
                        <a href="JavaScript:void(0)" class="nailthumb-container">
                            <img class="lazy" src="[{$foo->image_src|escape:'html'}]">
                        </a>
                    </div>
                </div>
            </div>
            [{/foreach}]
        </div>

    </div>
</div>
[{/if}]