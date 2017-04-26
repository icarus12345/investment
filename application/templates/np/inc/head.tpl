<header id="navbar" class="navbar" role="banner">
    <!-- Menu [ -->
    <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand"></a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navigation">
                    <span>
                        <span class="icon-bar line-1"></span>
                        <span class="icon-bar line-2"></span>
                        <span class="icon-bar line-3"></span>
                    </span>
                </button>
            </div>
            <nav id="navigation" class="collapse navbar-collapse bs-navbar-collapse pull-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li data-menu="home"><a href='/'>HOME</a></li>
                    <li data-menu="about"><a href='/about'>ABOUT US</a></li>
                    <li data-menu="project">
                        <a href="/project" >PROJECT</a>
                    </li>
                    <li data-menu="service">
                        <a href="/services">SERVICES</a>
                    </li>
                    <li data-menu="partner"><a href='/partner'>PARTNER & CUSTOMERS</a></li>
                    <li data-menu="blogs"><a href='/blogs'>BLOGS</a></li>
                    <li data-menu="contact"><a href='/contact'>CONTACT</a></li>
                    <li data-menu="more" class="more-menu">
                        <a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href='/'>HOME</a></li>
                            <li><a href='/'>HOME</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </div>
    <!-- Menu ] -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-menu="[{$selected_menu|default:''}]"]').addClass('active');
    })
    </script>
</header>