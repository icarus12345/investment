<header id="navbar" class="navbar navbar-fixed-top" role="banner">
    <!-- Menu [ -->
    <div class="">
            <div class="navbar-header">
                <a href="/" class="navbar-brand a">
                    Vietnam Property Investment
                </a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navigation">
                    <span>
                        <span class="icon-bar line-1"></span>
                        <span class="icon-bar line-2"></span>
                        <span class="icon-bar line-3"></span>
                    </span>
                </button>
            </div>
            <div class="socials-menu">
                <a href="[{$settting_data.google|default:''}]"><span class="fa fa fa-google-plus-square"></span></a>
                <a href="[{$settting_data.pinterest|default:''}]"><span class="fa fa fa-pinterest-square"></span></a>
                <a href="[{$settting_data.twitter|default:''}]"><span class="fa fa fa-twitter-square"></span></a>
                <a href="[{$settting_data.facebook|default:''}]"><span class="fa fa fa-facebook-square"></span></a>
                <a href="[{$settting_data.rss|default:''}]"><span class="fa fa fa-rss"></span></a>
            </div>
            <nav id="navigation" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li data-menu="home"><a href='/'>HOME</a></li>
                    <li data-menu="about"><a href='/about'>ABOUT</a></li>
                    <li data-menu="investing">
                        <a href="/investing-vietnam" >INVESTING VIETNAM</a>
                        [{if $investment_cates}]
                        <ul class="dropdown-menu">
                            [{foreach from=$investment_cates item=foo}]
                            <li><a href='/investing-vietnam/[{$foo->cat_alias|escape:'html'}]'>[{$foo->cat_title|escape:'html'}]</a></li>
                            [{/foreach}]
                        </ul>
                        [{/if}]
                    </li>
                    <li data-menu="service">
                        <a href="#" data-toggle="dropdown">SERVICES</a>
                        [{if $service_cates}]
                        <ul class="dropdown-menu">
                            [{foreach from=$service_cates item=foo}]
                            <li><a href='/service/[{$foo->cat_alias|escape:'html'}]'>[{$foo->cat_title|escape:'html'}]</a></li>
                            [{/foreach}]
                        </ul>
                        [{/if}]
                    </li>
                    <li data-menu="blogs"><a href='/blogs'>BLOG</a></li>
                    <li data-menu="gallery"><a href='/gallery'>GALLERY</a></li>
                    <li data-menu="fqa"><a href='/fqa'>FAQ</a></li>
                    <li data-menu="policy"><a href='/privacy-policy'>PRIVACY POLICY</a></li>
                    <li data-menu="team"><a href='/team-conditions'>TERMS & CONDITIONS</a></li>
                    <li data-menu="contact"><a href='/contact'>CONTACT</a></li>
                </ul>
            </nav>
    </div>
    <!-- Menu ] -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-menu="[{$actived_menu|default:''}]"]').addClass('active');
    })
    </script>
</header>