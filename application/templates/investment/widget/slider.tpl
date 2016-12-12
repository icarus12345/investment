        <div class="home-slider">
            <div class="owl-carousel" id="owl-home">
                [{foreach from=$sliders item=foo}]
                <div class="item cover" style="background-image:url([{$foo->image_src|escape:'html'}])">
                    <div class="home-content">
                        <div class="lab">[{$foo->image_title|escape:'html'}]</div>
                        <div class="tit">[{$foo->image_desc|escape:'html'}]</div>
                        <div class="btn btn-warning"><span>VIEW MORE</span></div>
                    </div>
                </div>
                [{/foreach}]
            </div>
            <div class="mouse"></div>
        </div>
        
