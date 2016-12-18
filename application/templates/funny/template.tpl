
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <base href="/" />
    <title>Cười cái coi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-hover.min.css" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-base.min.css" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-desktop.min.css" />
    <link rel="stylesheet" href="/assets/funny/funny.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0/angular-route.min.js"></script>
    <script src="/libraries/mobile-angular/dist/js/mobile-angular-ui.min.js"></script>
    <!-- Required to use $touch, $swipe, $drag and $translate services -->
    <script src="/libraries/mobile-angular/dist/js/mobile-angular-ui.gestures.min.js"></script>

    <script src="/libraries/mobile-angular/dist/js/angular-toastr.tpls.js"></script>
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/angular-toastr.css" />

    <script src="/assets/funny/funny.js"></script>
    <script src="/assets/funny/routeProvider.js"></script>
    <script src="/assets/funny/imageController.js"></script>
    <script src="/assets/funny/mainController.js"></script>
  </head>

  <body
    ng-app="MobileAngularUiExamples" 
    ng-controller="MainController"
    ui-prevent-touchmove-defaults
    >

    <!-- Sidebars -->
    <div ng-include="'funny/sidebar.html'" 
            ui-track-as-search-param='true'
            class="sidebar sidebar-left"></div>

    

    <div class="app" 
         ui-swipe-right='Ui.turnOn("uiSidebarLeft")'
         ui-swipe-left='Ui.turnOff("uiSidebarLeft")'>

      <!-- Navbars -->

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

      <div class="navbar navbar-app navbar-absolute-bottom" ui-yield-to="navbar-bottom">
        <div class="btn-group justified">
          <a href="#/image/add" class="btn btn-navbar"><i class="fa fa-image fa-navbar"></i> Add Image</a>
          <a href="https://github.com/mcasimir/mobile-angular-ui" class="btn btn-navbar"><i class="fa fa-youtube fa-navbar"></i> Add Video</a>
          <a href="" ui-turn-on="modal2" class="btn btn-navbar"><i class="fa fa-exclamation-circle fa-navbar"></i> Issues</a>
        </div>
      </div>

      <!-- App Body -->
      <div class="app-body" ng-class="{loading: loading}">
        <div ng-show="loading" class="app-content-loading">
          <i class="fa fa-spinner fa-spin loading-spinner"></i>
        </div>
        <div class="app-content">
          <ng-view></ng-view>
        </div>
      </div>

    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>
    
  </body>
</html>
