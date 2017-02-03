// 
// You can configure ngRoute as always, but to take advantage of SharedState location
// feature (i.e. close sidebar on backbutton) you should setup 'reloadOnSearch: false' 
// in order to avoid unwanted routing.
// 
app.config(function($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'funny/home/load/1.html',
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
    $routeProvider.when('/page', {
        templateUrl: function(params){ return 'funny/home/load/1.html'; },
        reloadOnSearch: false
    });
    $routeProvider.when('/page/:page', {
        templateUrl: function(params){ return 'funny/home/load/'+params.page+'.html'; },
        reloadOnSearch: false
    });

    $routeProvider.when('/video', {
        templateUrl: function(params){ return 'funny/home/video/1.html'; },
        reloadOnSearch: false
    });
    $routeProvider.when('/video/page/', {
        templateUrl: function(params){ return 'funny/home/video/1.html'; },
        reloadOnSearch: false
    });
    $routeProvider.when('/video/page/:page', {
        templateUrl: function(params){ return 'funny/home/video/'+params.page+'.html'; },
        reloadOnSearch: false
    });

    $routeProvider.when('/image', {
        templateUrl: function(params){ return 'funny/home/image/1.html'; },
        reloadOnSearch: false
    });
    $routeProvider.when('/image/page/', {
        templateUrl: function(params){ return 'funny/home/image/1.html'; },
        reloadOnSearch: false
    });
    $routeProvider.when('/image/page/:page', {
        templateUrl: function(params){ return 'funny/home/image/'+params.page+'.html'; },
        reloadOnSearch: false
    });
});