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
            <span>[{$entrydetail->_title}]</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex1-after">
    <div class="container">
        <div class="row">
            <div class="pull-right col-md-9 space-linex2-after">
                <div class="blog-cover">
                    <img src="[{$entrydetail->_data.cover}]">
                </div>
                <div>
                    <div class="h3-title">We can do for you</div>
                    <div class="row services-list">
                        [{foreach from=$doing item=foo}]
                        <div class="col-xs-6 col-sm-3">
                            <div class="services-item">
                                <div class="service-icon" style="background-image:url([{$foo->_data.image}])"></div>
                                <div class="line-clamp-f-2">[{$foo->_title}]</div>
                            </div>
                        </div>
                        [{/foreach}]
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div>
                    <div class="h3-title">Planning</div>
                    <p class="gray word-wrap">[{$entrydetail->_data.planning}]</p>
                </div>
                <div>
                    <div class="h3-title">Project Management</div>
                    <p class="gray word-wrap">[{$entrydetail->_data.projectmanagement}]</p>
                </div>
                <div>
                    <div class="h3-title">Process</div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        [{foreach from=$process item=foo name=key}]
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-[{$foo->_id}]">
                                <h4 class="panel-title">
                                    <a role="button" 
                                        data-toggle="collapse" 
                                        data-parent="#accordion" 
                                        href="#collapse-[{$foo->_id}]" 
                                        aria-expanded="[{if $smarty.foreach.key.index == 0}]true[{else}]false[{/if}]" 
                                        aria-controls="collapse-[{$foo->_id}]"
                                        >
                                        [{$smarty.foreach.key.index + 1}]. [{$foo->_title}]
                                    </a>
                                </h4>
                            </div>
                            <div 
                                id="collapse-[{$foo->_id}]" 
                                class="panel-collapse collapse [{if $smarty.foreach.key.index == 0}]in[{/if}]" 
                                role="tabpanel" 
                                aria-labelledby="heading-[{$foo->_id}]"
                                >
                                <div class="panel-body">
                                    <p class="gray word-wrap">[{$foo->_data.desc}]</p>
                                </div>
                            </div>
                        </div>
                        [{/foreach}]
                    </div>
                </div>
                <div>
                    <div class="h3-title">Get Free Quantation</div>
                    <div>
                        <form id="sendRequestFrm" name="sendRequestFrm" class="validationFrm">
                            <input type="hidden"  name="contact_type" value="contact" />
                            <div class="pull-top pull-bottom">
                                <div class=" control-group ">
                                    <select class="form-control validate[required]">
                                        <option value="">Choose Sectors</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pull-bottom pull-top">
                                <div class="control-group">
                                    <input type="text" class="form-control validate[required,maxSize[100]]" placeholder="Full Name" name="contact_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="pull-bottom pull-top">
                                        <div class="control-group">
                                            <input type="text" class="form-control validate[required,custom[email],maxSize[100]]" placeholder="Email" name="contact_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pull-bottom pull-top">
                                        <div class="control-group">
                                            <input type="text" class="form-control validate[required,maxSize[12]]" placeholder="Phone" name="contact_phone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pull-bottom pull-top">
                                <div class="control-group">
                                    <input type="text" class="form-control validate[required,maxSize[250]]" placeholder="Subject" name="contact_subject">
                                </div>
                            </div>

                            <div class="pull-bottom pull-top">
                                <div class="control-group">
                                    <textarea rows="10" class="form-control validate[required]" placeholder="Your message..." name="contact_message"></textarea>
                                </div>
                            </div>
                            <div class=" pull-top">
                                <button type="button" onclick="sendRequest()" class="btn btn-gray btn-block btn-lg" ><span>GET QUOTE</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="right-bar col-md-3 pull-left col-xs-12 space-linex2-after">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/service-list.tpl"}]
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