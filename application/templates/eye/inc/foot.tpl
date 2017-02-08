        <footer>
            <div>
                <div class="container">
                    <div class="row f16">
                        <div class="col-md-6 cls">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="foot-logo f16">ADELAIDE EYE & LASER CENTRE</div>
                                    <div class="wicon">
                                        <i class="fa fa-phone f18"></i> 
                                        
Free call: 1800 809 991<br/>
(Excluding Adelaide Metro Area)


                                    </div>
                                    <div class="space-line"></div>
                                    <div class="space-line"></div>
                                    <div class="wicon">
                                        <i class="fa fa-map-marker f16"></i> 
                                        215 Greenhill Road<br/>
Eastwood, South Australia 5063.
                                    </div>
                                    <div class="space-line"></div>
                                    <div class="space-line"></div>
                                    <div class="wicon">
                                        <i class="fa fa-envelope-o f16"></i> 
                                        companyname@email.com
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="foot-tit f16">SERVICES</div>
                                    <div class="foot-list">
                                        [{foreach from=$aServiceCate item=foo key=i}]
                                        <a href="[{'services/'|cat:$foo->cat_alias|escape:'html'|base_url}]">[{$foo->cat_title|escape:'html'}]</a>
                                        [{/foreach}]
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cls">
                            <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="foot-tit f16">INFORMATION</div>
                                <div class="foot-list">
                                    [{foreach from=$aAbouts item=foo key=i}]
                                    <a href="[{'about/'|cat:$foo->_alias|escape:'html'|base_url}]">[{$foo->_title|escape:'html'}]</a>
                                    [{/foreach}]
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="foot-tit f16">ACCREDITATION</div>
                                <img src="/assets/eye/images/logo-foot.jpg">
                                <div>Global Mark &copy; Accreditation</div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-menu">
                <div class="container">
                    <div class="text-center">
                        ALL RIGHTS RESERVED &copy; 2016 <span>ADELAIDE EYE & LASER CENTRE</span> &reg;
                    </div>
                </div>
            </div>
        </footer>