[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>OUR SERVICES</div>
            <span>buildings as well as residential and industrial projects</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <a href="/services">Services</a>
            <span>[{$servicedetail->data_title}]</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex3-after">
    <div class="container">
        <div class="row">
            <div class="pull-right col-md-9">
                <div class="blog-cover">
                    <img src="[{$servicedetail->data_data.cover}]">
                </div>
                <div>
                    <h3>We can do for you</h3>
                    <div class="row services-list">
                        [{foreach from=$doing item=foo}]
                        <div class="col-xs-6 col-sm-3">
                            <img src="[{$foo->data_data.image}]">
                            <div class="line-clamp-f-2">[{$foo->data_title}]</div>
                        </div>
                        [{/foreach}]
                    </div>
                </div>
                <div>
                    <h3>Planning</h3>
                    <p>[{$servicedetail->data_data.planning}]</p>
                </div>
                <div>
                    <h3>Project Management</h3>
                    <p>[{$servicedetail->data_data.projectmanagement}]</p>
                </div>
                <div>
                    <h3>Process</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        [{foreach from=$process item=foo name=key}]
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-[{$foo->data_id}]">
                                <h4 class="panel-title">
                                    <a role="button" 
                                        data-toggle="collapse" 
                                        data-parent="#accordion" 
                                        href="#collapse-[{$foo->data_id}]" 
                                        aria-expanded="[{if $smarty.foreach.key.index == 0}]true[{else}]false[{/if}]" 
                                        aria-controls="collapse-[{$foo->data_id}]"
                                        >
                                        [{$smarty.foreach.key.index + 1}]. [{$foo->data_title}]
                                    </a>
                                </h4>
                            </div>
                            <div 
                                id="collapse-[{$foo->data_id}]" 
                                class="panel-collapse collapse [{if $smarty.foreach.key.index == 0}]in[{/if}]" 
                                role="tabpanel" 
                                aria-labelledby="heading-[{$foo->data_id}]"
                                >
                                <div class="panel-body">
                                    [{$foo->data_data.desc}]
                                </div>
                            </div>
                        </div>
                        [{/foreach}]
                    </div>
                </div>
            </div>
            <div class="right-bar col-md-3">
                <div>
                    <ul>
                        [{foreach from=$services item=foo}]
                        <li><a href="/services/[{$foo->data_alias|escape:'html'}]">[{$foo->data_title|escape:'html'}]</a></li>
                        [{/foreach}]
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]