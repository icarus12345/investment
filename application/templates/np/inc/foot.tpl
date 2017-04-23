<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 space-linex2-after">
                <div class="foot-logo">
                    <a href="#">
                        <img src="/assets/np/images/logo-foot.png">
                    </a>
                </div>
                <p class="space-line-after">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum ut nisi vel convallis. Etiam efficitur odio id faucibus semper purus velit commodo justo aorper sapien mi eget mi.
                </p>
                <p>
                    Head Office:  48A Vo Van Tan, Ward 06, District 03, HoChiMinh City.<br/>
                    Representative Office:  469 Dien Bien Phu, Ward 03, District 03, HoChiMinh City.<br/>
                    <br/>
                    Phone: (+84)8  2241 4546 / 3832 8068 | Fax : 08 3832 8066<br/>
                    Website : www.np-corp.com
                </p>
            </div>
            <div class="col-sm-6 cls">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 space-linex2-after">
                        <div class="foot-title"><span>Quick Link</span></div>
                        
                        <ul class="foot-list">
                            <li><a href="/about">About us</a></li>
                            <li><a href="/blogs">Blog</a></li>
                            <li><a href="/fqa">FAQ</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/team-conditions">Terms & Conditions</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-xs-12 space-linex2-after">
                        <div class="foot-title"><span>Our Products</span></div>
                        <div class="row half foot-products">
                            [{foreach from=$featuredwork item=foo name=fw}]
                            [{if $smarty.foreach.fw.index < 8}]
                            <div class="col-xs-3 half">
                                <div class="nailthumb">
                                    <div class="nailthumb-figure-square">
                                        <a href="JavaScript:void(0)" class="nailthumb-container">
                                            <img class="lazy nailthumb-image" src="[{$foo->_data.image}]">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            [{/if}]
                            [{/foreach}]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-text-center">
                    Copyright &copy; 2017 N&P Construction - Design by <a href="#">CDS</a>
                </div>
                <div class="col-sm-6 sm-text-right mb-text-center">
                Privacy Policy  | Terms & Condition
                </div>
            </div>
        </div>
    </div>
</footer>