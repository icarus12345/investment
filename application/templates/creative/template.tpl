[{include file=$smarty.const.APPPATH|cat:"templates/creative/inc/meta.tpl"}]
    <body class="full-page">
        [{include file=$smarty.const.APPPATH|cat:"templates/creative/inc/header.tpl"}]
        
        <span class="slider-nav prev">
            <span class="arrow"></span>
            <span class="number">
                <span class="left"></span>
                <span class="middle"></span>
                <span class="right"></span>
            </span>
        </span>
        <span class="slider-nav next">
            <span class="arrow"></span>
            <span class="number">
                <span class="left">2</span>
                <span class="middle"></span>
                <span class="right"></span>
            </span>
        </span>
        <div id="fullpage">
            [{foreach from=$sliderData item=entry key=i}]

            <div class="section" data-index="[{$i}]">
                <div class="section-image">
                    <div data-pos="tl"><div><div style="background-image:url([{$entry->_data.image}])" class="cover slider-bg"></div></div></div>
                    <div data-pos="tr"><div><div style="background-image:url([{$entry->_data.image}])" class="cover slider-bg"></div></div></div>
                    <div data-pos="bl"><div><div style="background-image:url([{$entry->_data.image}])" class="cover slider-bg"></div></div></div>
                    <div data-pos="br"><div><div style="background-image:url([{$entry->_data.image}])" class="cover slider-bg"></div></div></div>
                </div>
                <div class="slider-cap">
                    <div class="cap1">
                        <div class="capitalize text-animation">
                            [{$entry->_data.desc}]
                        </div>
                    </div>
                    <h2 class="delay-1 text-animation-2">[{$entry->_title}]</h2>
                    <a class="btn-white text-animation-2 delay-2" href="[{$entry->_data.url}]">
                        Xem Thêm
                    </a>
                </div>
                
            </div>
            [{/foreach}]
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                
            });
        </script>
        <footer>
            <div class="socials">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google"></span></a>
            </div>
            <div class="copyright">&copy; 2016 All right reserved. Development with <span class="fa fa-heart"></span> by <a href="#">Creative Design</a></div>
        </footer>


