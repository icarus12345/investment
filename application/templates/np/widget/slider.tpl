        <div class="home-slider">
            <div class="owl-carousel" id="owl-home">
                [{foreach from=$sliders item=foo}]
                <div class="item cover" style="background-image:url([{$foo->_data.image|escape:'html'}])">
                    <div class="slider-content">
                        <div class="icon-on-top"></div>
                        <div class="icon-on-bottom"></div>

                        <div class="sub-title text-uppercase" data-fz="24">[{$foo->_title}]</div>
                        <div class="title text-uppercase" data-fz="36">[{$foo->_data.desc}]</div>
                        <a href="[{$foo->_data.url|escape:'html'}]" class="btn btn-lg btn-white "><span>VIEW MORE</span></a>
                    </div>
                </div>
                [{/foreach}]
            </div>
            <div class="mouse"></div>
        </div>
        
