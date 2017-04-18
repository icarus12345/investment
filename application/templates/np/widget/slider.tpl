        <div class="home-slider">
            <div class="owl-carousel" id="owl-home">
                [{foreach from=$sliders item=foo}]
                <div class="item cover" style="background-image:url([{$foo->_data.image|escape:'html'}])">
                    <div class="home-content">
                        <div class="lab">[{$foo->_title|escape:'html'}]</div>
                        <div class="tit">[{$foo->_data.desc|escape:'html'}]</div>
                        <a href="[{$foo->_data.url|escape:'html'}]" class="btn btn-warning"><span>VIEW MORE</span></a>
                    </div>
                </div>
                [{/foreach}]
            </div>
            <div class="mouse"></div>
        </div>
        
