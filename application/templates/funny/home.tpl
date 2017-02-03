<div class="navbar navbar-app navbar-absolute-top">
    <div class="navbar-brand navbar-brand-center" ui-yield-to="title">
        Cười cái coi
    </div>
    <div class="btn-group pull-left">
        <div ui-toggle="uiSidebarLeft" class="btn sidebar-toggle">
            <i class="fa fa-bars"></i> Menu
        </div>
    </div>
    <div class="btn-group pull-right" >
        <div  class="btn">
            <i class="fa fa-user"></i> Login
        </div>
    </div>
</div>
<div class="app-body" ng-class="{loading: loading}">
    <div ng-show="loading" class="app-content-loading">
        <i class="fa fa-spinner fa-spin loading-spinner"></i>
    </div>
    <div class="app-content">
        <div class="scrollable">
            <div class="scrollable-content">
                <div class="list-group text-center">
                    <div class="list-group-item">
                        <h1>CƯỜI CÁI COI <small>1.0</small></h1>
                    </div>
                    [{foreach from=$entrys item=entry}]
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
                        <div class="youtube" ng-click="toggleVideo([{$entry->_id}],'[{$entry->_data.id|escape:'html'}]')">
                            <iframe ng-if="activedId=='[{$entry->_id}]'" src="//www.youtube.com/embed/[{$entry->_data.id|escape:'html'}]?autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen></iframe>
                            <img ng-show="activedId!='[{$entry->_id}]'" src="//img.youtube.com/vi/[{$entry->_data.id|escape:'html'}]/maxresdefault.jpg"/>
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
                    [{/foreach}]
                </div>
                <div class="pages">[{$paging}]</div>
            </div>
        </div>
    </div>
</div>
<div ui-content-for="modals">
    <div ng-include="'funny/home/modal.html'"></div>
</div>