<div ui-content-for="title">
  <span>Hình ảnh</span>
</div>

<div class="navbar navbar-app navbar-absolute-bottom">
    <div class="btn-group justified">
      <span  class="btn btn-navbar"><i class="fa fa-back fa-navbar"></i> Trang chủ</span>
      <a href="#/image/add" class="btn btn-navbar"><i class="fa fa-remove fa-navbar"></i> Tiếp tục</a>
    </div>
</div>

<div class="app-body" ng-class="{loading: loading}">
    <div ng-show="loading" class="app-content-loading">
        <i class="fa fa-spinner fa-spin loading-spinner"></i>
    </div>
    <div class="app-content">
        <div class="scrollable" >  
            <div class="scrollable-content">
                <div class="list-group text-center" >
                    <div class="list-group-item">
                        <h1>CƯỜI CÁI COI <small>1.0</small></h1>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item transition" data-from="[{$entry->_data.origin|default:''}]" ng-class="activedId=='[{$entry->_id}]'?'actived':''">
                        [{if $entry->_data.type=="Image"}]
                        <!-- <a href="#/image/detail/[{$entry->_id}]"> -->
                        <div ng-click="toggle([{$entry->_id}])" >
                            <img src="[{$entry->_data.url|escape:'html'}]"/>
                        </div>
                        <!-- </a> -->
                        [{elseif $entry->_data.type=="Video"}]
                        <div class="frame">
                            <iframe src="[{$entry->_data.url|escape:'html'}]" frameborder="0" allowfullscreen></iframe>
                        </div>
                        [{elseif $entry->_data.type=="youtube"}]
                        <div class="youtube play">
                            <iframe src="//www.youtube.com/embed/[{$entry->_data.id|escape:'html'}]?autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen></iframe>
                            <!-- <img ng-show="activedId!='[{$entry->_id}]'" src="//img.youtube.com/vi/[{$entry->_data.id|escape:'html'}]/maxresdefault.jpg"/> -->
                        </div>
                        [{/if}]
                        <h4>[{$entry->_title|escape:'html'}]</h4>
                        <div class="social-action">
                            <div><span class="fa fa-thumbs-up"></span></div>
                            <div><span class="fa fa-thumbs-down"></span></div>
                            <div ng-click="showPost()"><span class="fa fa-comments"></span></div>
                            <div class="pull-right"><span class="fa fa-facebook"></span></div>
                            <div class="pull-right"><span class="fa fa-google"></span></div>
                            <div class="pull-right"><span class="fa fa-twitter"></span></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>