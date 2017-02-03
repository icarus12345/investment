
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

      
        <ng-view></ng-view>
    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>
    
  </body>
</html>
