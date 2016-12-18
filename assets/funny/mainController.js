//
// For this trivial demo we have just a unique MainController 
// for everything
//

app.controller('MainController', function($rootScope, $scope, $route) {
    

    // User agent displayed in home page
    $scope.userAgent = navigator.userAgent;

    // Needed for the loading screen
    $rootScope.$on('$routeChangeStart', function() {
        $rootScope.loading = true;
    });

    $rootScope.$on('$routeChangeSuccess', function() {
        $rootScope.loading = false;
    });
    $scope.showPost = function(id){
        $rootScope.Ui.turnOn('modal2');
    }
    $scope.activedId = undefined;
    $scope.toggle = function(id){
        if($scope.activedId){
            $scope.activedId = undefined
        } else {
            $scope.activedId = id;
        }
    }
   
    // 
    // Right Sidebar
    // 
    $scope.chatUsers = [{
        name: 'Carlos  Flowers',
        online: true
    }, {
        name: 'Byron Taylor',
        online: true
    }, {
        name: 'Jana  Terry',
        online: true
    }, {
        name: 'Darryl  Stone',
        online: true
    }, {
        name: 'Fannie  Carlson',
        online: true
    }, {
        name: 'Holly Nguyen',
        online: true
    }, {
        name: 'Bill  Chavez',
        online: true
    }, {
        name: 'Veronica  Maxwell',
        online: true
    }, {
        name: 'Jessica Webster',
        online: true
    }, {
        name: 'Jackie  Barton',
        online: true
    }, {
        name: 'Crystal Drake',
        online: false
    }, {
        name: 'Milton  Dean',
        online: false
    }, {
        name: 'Joann Johnston',
        online: false
    }, {
        name: 'Cora  Vaughn',
        online: false
    }, {
        name: 'Nina  Briggs',
        online: false
    }, {
        name: 'Casey Turner',
        online: false
    }, {
        name: 'Jimmie  Wilson',
        online: false
    }, {
        name: 'Nathaniel Steele',
        online: false
    }, {
        name: 'Aubrey  Cole',
        online: false
    }, {
        name: 'Donnie  Summers',
        online: false
    }, {
        name: 'Kate  Myers',
        online: false
    }, {
        name: 'Priscilla Hawkins',
        online: false
    }, {
        name: 'Joe Barker',
        online: false
    }, {
        name: 'Lee Norman',
        online: false
    }, {
        name: 'Ebony Rice',
        online: false
    }];

    //
    // 'Forms' screen
    //  
    $scope.rememberMe = true;
    $scope.email = 'me@example.com';

    $scope.login = function() {
        alert('You submitted the login form');
    };
        // 
        // 'Drag' screen
        // 
    $scope.notices = [];

    for (var j = 0; j < 10; j++) {
        $scope.notices.push({
            icon: 'envelope',
            message: 'Notice ' + (j + 1)
        });
    }

    $scope.deleteNotice = function(notice) {
        var index = $scope.notices.indexOf(notice);
        if (index > -1) {
            $scope.notices.splice(index, 1);
        }
    };
});