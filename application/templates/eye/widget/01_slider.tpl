        <div id="owl-home" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                [{foreach from=$sliders item=foo key=i}]
                <li data-target="#owl-home" data-slide-to="0" class="[{if $foo->_id == $sliders[0]->_id}]active[{/if}]">0[{$i+1}]</li>
                [{/foreach}]
            </ol>
            <div class="carousel-inner" role="listbox">
                [{foreach from=$sliders item=foo key=i}]
                <div class="item cover [{if $foo->_id == $sliders[0]->_id}]active[{/if}]" style="background-image:url('[{$foo->_data.image|escape:'html'}]')">
                    <div class="home-content">
                        <div class="tit">[{$foo->_title|escape:'html'}]</div>
                        <p class="lab">[{$foo->_data.desc|escape:'html'}]</p>
                        <a href="[{$foo->_data.url|escape:'html'}]" class="btn btn-default"><span>Read more</span></a>
                    </div>
                </div>
                [{/foreach}]
            </div>
            <!-- <a class="left carousel-control" href="#owl-home" role="button" data-slide="prev"></a> -->
            <!-- <a class="right carousel-control" href="#owl-home" role="button" data-slide="next"></a> -->
        </div>