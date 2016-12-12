<header id="navbar" class="navbar navbar-fixed-top" role="banner">
    <!-- Menu [ -->
    <div class="">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                    VIETNAM'S PROPERTY INVESTMENT
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
                <a href="[{$settting_data.google|default:''}]"><span class="fa fa fa-google"></span></a>
                <a href="[{$settting_data.google|default:''}]"><span class="fa fa fa-pinterest-square"></span></a>
                <a href="[{$settting_data.twitter|default:''}]"><span class="fa fa fa-twitter"></span></a>
                <a href="[{$settting_data.facebook|default:''}]"><span class="fa fa fa-facebook"></span></a>
            </div>
            <nav id="navigation" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href='/'>HOME</a></li>
                    <li><a href='/about'>ABOUT</a></li>
                    <li>
                        <a href="/investing-vietnam" >INVESTING VIETNAM</a>
                        [{if $investment_cates}]
                        <ul class="dropdown-menu">
                            [{foreach from=$investment_cates item=foo}]
                            <li><a href='/investing-vietnam/[{$foo->cat_alias|escape:'html'}]'>[{$foo->cat_title|escape:'html'}]</a></li>
                            [{/foreach}]
                        </ul>
                        [{/if}]
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown">SERVICES</a>
                        [{if $service_cates}]
                        <ul class="dropdown-menu">
                            [{foreach from=$service_cates item=foo}]
                            <li><a href='/service/[{$foo->cat_alias|escape:'html'}]'>[{$foo->cat_title|escape:'html'}]</a></li>
                            [{/foreach}]
                        </ul>
                        [{/if}]
                    </li>
                    <li><a href='/blogs'>BLOG</a></li>
                    <li><a href='/gallery'>GALLERY</a></li>
                    <li><a href='/fqa'>FQA</a></li>
                    <li><a href='/privacy-policy'>PRIVACY POLICY</a></li>
                    <li><a href='/team-condition'>TEAM & CONDITIONS</a></li>
                    <li><a href='/contact'>CONTACT</a></li>
                </ul>
            </nav>
    </div>
    <!-- Menu ] -->
</header>