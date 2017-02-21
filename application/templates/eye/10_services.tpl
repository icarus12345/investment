[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">[{$selected_cat->cat_title|default:'Services'}]</div>
        </div>
        <div class="becu">
            <div class="container">
            Services [{if isset($selected_cat)}] / [{$selected_cat->cat_title}][{/if}]
            </div>
        </div>
        <div class="about-list cls meet-the-team">
            <div class="container">
                <!-- <div> -->
                <span class="btns">
                    <a href="/services" class="btn btn-white [{if !isset($selected_cat)}]actived[{/if}]">All</a>
                    [{foreach from=$aServiceCate item=foo key=i}]
                    [{if isset($selected_cat) && $selected_cat->cat_id==$foo->cat_id}]
                    <a href="[{'services/'|cat:$foo->cat_alias|escape:'html'|base_url}]" class="btn btn-white actived">[{$foo->cat_title|escape:'html'}]</a>
                    [{else}]
                    <a href="[{'services/'|cat:$foo->cat_alias|escape:'html'|base_url}]" class="btn btn-white">[{$foo->cat_title|escape:'html'}]</a>
                    [{/if}]
                    [{/foreach}]
                </span>
                <!-- </div> -->
                <div class="row">
                    [{foreach from=$aServices item=foo key=i}]
                    <div class="item col-sm-6 col-md-4">
                        <a href="[{'services/'|cat:$foo->cat_alias|escape:'html'|cat:'/'|cat:$foo->_alias|escape:'html'|base_url}]" class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <div class="nailthumb-container">
                                    <img class="lazy" src="[{$foo->_data.image|escape:'html'}]"/>
                                </div>
                            </div>
                        </a>
                        <div>
                            <div class="tit">[{$foo->_title|escape:'html'}]</div>
                            <p>[{$foo->_data.desc|escape:'html'}]</p>
                        </div>
                    </div>
                    [{/foreach}]
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
