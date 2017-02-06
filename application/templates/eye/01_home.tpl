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
                    <a href="[{$foo->_data.alias|escape:'html'|base_url}]" class="reaad-more a">Read more</a>
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