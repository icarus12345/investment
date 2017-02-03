// 
// Here is how to define your module 
// has dependent on mobile-angular-ui
// 
var app = angular.module('MobileAngularUiExamples', [
    'ngRoute',
    'mobile-angular-ui',

    // touch/drag feature: this is from 'mobile-angular-ui.gestures.js'
    // it is at a very beginning stage, so please be careful if you like to use
    // in production. This is intended to provide a flexible, integrated and and 
    // easy to use alternative to other 3rd party libs like hammer.js, with the
    // final pourpose to integrate gestures into default ui interactions like 
    // opening sidebars, turning switches on/off ..
    'mobile-angular-ui.gestures',
    'toastr',

]);

app.run(function($transform) {
    window.$transform = $transform;
});




app.directive('dragMe', ['$drag', function($drag) {
    return {
        controller: function($scope, $element) {
            $drag.bind($element, {
                //
                // Here you can see how to limit movement 
                // to an element
                //
                transform: $drag.TRANSLATE_INSIDE($element.parent()),
                end: function(drag) {
                    // go back to initial position
                    drag.reset();
                }
            }, { // release touch when movement is outside bounduaries
                sensitiveArea: $element.parent()
            });
        }
    };
}]);

