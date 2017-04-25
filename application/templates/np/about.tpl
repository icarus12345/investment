[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>ABOUT US</div>
            <span>Let us tell you about us </span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <a href="/about">About us</a>
            <span>[{$entrydetail->_title}]</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex1-after">
    <div class="container">
        <div class="row">
            <div class="pull-right col-md-9 space-linex2-after col-xs-12">
                <div class="blog-cover">
                    <img src="[{$entrydetail->_data.image}]">
                </div>
                <div>
                    <div class="h3-title">[{$entrydetail->_data.title}]</div>

                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css"/>
                    <div class="cke_editable">[{$entrydetail->_data.content}]</div>

                    [{if $entrydetail->_id == 143}]
                    <div class="row space-line-before">
                        [{foreach from=$subEntrys item=foo}]
                        <div class="col-sm-6 space-line-before">
                        <img style="max-width: 100%;margin: auto;display: block;"
                            src="[{$foo->_data.image}]">
                        </div>
                        [{/foreach}]
                    </div>
                    [{elseif $entrydetail->_id == 151}]
                    <div class="row space-line-before">
                        [{foreach from=$subEntrys item=foo}]
                        <div class="col-sm-4 col-xs-6 space-line-before">
                            <div class="staff-item">
                                <div class="nailthumb">
                                    <div class="nailthumb-figure-square">
                                        <a href="JavaScript:void(0)" class="nailthumb-container">
                                            <img class="lazy" src="[{$foo->_data.image|escape:'html'}]">
                                        </a>
                                    </div>
                                </div>
                                <div class="gray-box info text-center text-uppercase space-line-before space-line-after">
                                    <h4>[{$foo->_title|escape:'html'}]</h4>
                                    <div class="gray">--[{$foo->_data.position|escape:'html'}]--</div>
                                    <div class="gray">[{$foo->_data.desc|escape:'html'}]</div>
                                </div>
                            </div>
                        </div>
                        [{/foreach}]
                    </div>
                    [{else}]
                    
                    [{/if}]
                </div>
                
                <div class="clearfix"></div>
            </div>
            <div class="right-bar col-md-3 pull-left col-xs-12 space-linex2-after">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/about-list.tpl"}]
                <div class="cover" style="background-image:url(/assets/np/images/Layer-21.jpg">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/testimonial-slider.tpl"}]
                </div>
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/download.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/contact.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/business-hour.tpl"}]
            </div>
        </div>
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]