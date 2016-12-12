<footer>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 cls">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <a href="/" class="foot-logo f16">VIETNAMS<br/>PROPERTY INVESTMENT</a>
                            <div class="wicon">
                                <i class="fa fa-map-marker f18"></i> 
                                Australia - Sydney<br/>
                                Vietnam - Ho Chi Minh City
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="wicon">
                                <i class="fa fa-phone f16"></i> 
                                Australia: +90 547 854 14 57<br/>
                                Vietnam: +84 163 322 3508
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="wicon">
                                <i class="fa fa-envelope-o f16"></i> 
                                info@linkedproperties.net
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="foot-tit f16">Twitter Stream</div>
                            <div class="wicon">
                                <i class="fa fa-twitter f20"></i> 
                                <div>A well-designed #eComme & back office in egration is ...</div>
                                <a href="#">https://t.co/0Nn8mVrebG</a><br/>
                                December , 01, 2016
                            </div>
                            <hr class="dashed-hr">
                            <div class="wicon">
                                <i class="fa fa-twitter f20"></i> 
                                <div>A well-designed #eComme & back office in egration is ...</div>
                                <a href="#">https://t.co/0Nn8mVrebG</a><br/>
                                December , 01, 2016
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cls">
                    <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="foot-tit f16">New Blog Posts</div>
                        
                        [{if isset($feature_blogs[0])}]
                        <div class="">
                            <a href="/blogs/[{$feature_blogs[0]->content_alias|escape:'html'}]">
                            <div class="foot-tit2">[{$feature_blogs[0]->content_title|escape:'html'}]</div>
                            </a>
                            <br/>[{$feature_blogs[0]->content_insert|date_format:'%e %b,%Y'}]
                        </div>
                        [{/if}]
                        <hr class="dashed-hr">
                        [{if isset($feature_blogs[1])}]
                        <div class="">
                            <a href="/blogs/[{$feature_blogs[1]->content_alias|escape:'html'}]">
                            <div class="foot-tit2">[{$feature_blogs[1]->content_title|escape:'html'}]</div>
                            </a>
                            <br/>[{$feature_blogs[1]->content_insert|date_format:'%e %b,%Y'}]
                            
                        </div>
                        [{/if}]
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="foot-tit f16">News Letter</div>
                        <div class="">
                            Enter your email address to subscribe our notification of our new post & features by property investment.
                        </div>
                        <form id="subcribeFrm" name="subcribeFrm" class="validationFrm">
                        <div class="input-group">
                          <input type="text" class="form-control validate[required,custom[email]]" placeholder="Recipient's username" aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2"><span class="fa fa-paper-plane-o"></span></span>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/blogs">Blog</a></li>
                            <li><a href="/fqa">FAQ</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/team-conditions">Team & Conditions</a></li>
                            <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                VIETNAMS PROPERTY INVESTMENT &copy; 2016
                </div>
            </div>
        </div>
    </div>
</footer>