<div class="scrollable">
    <div class="scrollable-content">
        <div class="list-group text-center">
            <div class="list-group-item">
                <h1>CƯỜI CÁI COI <small>1.0</small></h1>
            </div>
            [{foreach from=$entrys item=entry}]
            <div class="list-group-item" ng-class="activedId=='[{$entry->_id}]'?'actived':''">
                [{if $entry->_data.type=="Image"}]
                <!-- <a href="#/image/detail/[{$entry->_id}]"> -->
                <div ng-click="toggle([{$entry->_id}])">
                    <img src="[{$entry->_data.url|escape:'html'}]"/>
                </div>
                <!-- </a> -->
                [{elseif $entry->_data.type=="Video"}]
                <div class="frame">
                    <iframe src="https://www.youtube.com/embed/sJSv--NUaJY" frameborder="0" allowfullscreen></iframe>
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
    </div>
</div>
<div ui-content-for="modals">
  <div ng-include="'funny/home/modal.html'"></div>
</div>