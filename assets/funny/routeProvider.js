// 
// You can configure ngRoute as always, but to take advantage of SharedState location
// feature (i.e. close sidebar on backbutton) you should setup 'reloadOnSearch: false' 
// in order to avoid unwanted routing.
// 
app.config(function($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'funny/home.html',
        // reload: true,
        reloadOnSearch: false
    });
    $routeProvider.when('/image', {
        templateUrl: 'image.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/image/add', {
        templateUrl: 'image/add.html',
        controller: 'imageController',
        reloadOnSearch: true
    });
    $routeProvider.when('/image/detail/:id', {
        templateUrl: function(params){ return 'image/detail/'+params.id+'.html'; },
        controller: 'imageController',
        reloadOnSearch: false
    });
    $routeProvider.when('/tabs', {
        templateUrl: 'tabs.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/accordion', {
        templateUrl: 'accordion.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/overlay', {
        templateUrl: 'overlay.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/forms', {
        templateUrl: 'forms.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/dropdown', {
        templateUrl: 'dropdown.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/touch', {
        templateUrl: 'touch.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/swipe', {
        templateUrl: 'swipe.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/drag', {
        templateUrl: 'drag.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/drag2', {
        templateUrl: 'drag2.html',
        reloadOnSearch: false
    });
    $routeProvider.when('/carousel', {
        templateUrl: 'carousel.html',
        reloadOnSearch: true
    });
});