<div ui-content-for="title">
  <span>Hình ảnh</span>
</div>

<div ui-content-for="navbar-bottom">
    <div class="btn-group justified">
      <span  class="btn btn-navbar"><i class="fa fa-save fa-navbar"></i> <--</span>
      <a href="#/" class="btn btn-navbar"><i class="fa fa-remove fa-navbar"></i> --> </a>
    </div>
</div>
<div class="scrollable" >  
    <div class="scrollable-content">
        <div class="list-group text-center" >
            <div class="list-group-item">
                <h1>CƯỜI CÁI COI <small>1.0</small></h1>
            </div>
            <div class="list-group-item">
                [{if $entry->_data.type=="Image"}]
                <div>
                    <img src="[{$entry->_data.url|escape:'html'}]">
                </div>
                [{elseif $entry->_data.type=="Video"}]
                <div class="frame">
                    <iframe src="https://www.youtube.com/embed/sJSv--NUaJY" frameborder="0" allowfullscreen></iframe>
                </div>
                [{/if}]
                <h4>[{$entry->_title|escape:'html'}]</h4>
                <div class="social-action">
                    <div><span class="fa fa-thumbs-up"></span></div>
                    <div><span class="fa fa-thumbs-down"></span></div>
                    <div><span class="fa fa-comments"></span></div>
                    <div class="pull-right"><span class="fa fa-facebook"></span></div>
                    <div class="pull-right"><span class="fa fa-google"></span></div>
                    <div class="pull-right"><span class="fa fa-twitter"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>