app.controller('imageController', function($rootScope, $scope, $http, Utils, toastr) {
    var old_img;
    $scope.shownavbarbottom = true;
    $scope.previewInage = function() {
        if($scope.image_data.image == old_img) return;
        if($scope.image_data.urlValid){
            old_img = $scope.image_data.image;
            $scope.image_data.image_src = undefined;
            Utils.isImage($scope.image_data.image)
                .then(function(result) {
                    $scope.image_data.result = result;
                    if(result) $scope.image_data.image_src = $scope.image_data.image;
                });
        }
    }
    $scope.image_data = {
        title: '',
        image: '',
        urlValid: false,
        formValid: false
    }
    $scope.validImage = function() {

        var deferred = $q.defer();

        var image = new Image();
        image.onerror = function() {
            deferred.resolve(false);
        };
        image.onload = function() {
            deferred.resolve(true);
        };
        image.src = $scope.image_data.image;

        return deferred.promise;
    }
    $scope.save = function(){
        if($scope.image_data.formValid){
            $http({
                url:'/image/onAddImage',
                method:'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                data: {
                    title: $scope.image_data.title,
                    image: $scope.image_data.image
                },
                // withCredentials: true
            }).then(function(res){
                if(res.data.result>=0){
                    toastr.info(res.data.message, 'Thông báo !');
                    location.href = res.data.url;
                } else {
                    toastr.warning(res.data.message, 'Thông báo !');
                }
                
            },function(res){
                toastr.error('Hệ thống bận rùi !', 'Thông báo !');
            });
        } else {
            toastr.warning('Vui lòng nhập đầy đủ thông tin!', 'Thông báo !');
        }
    }
})
app.factory('Utils', function($q) {
    return {
        isImage: function(src) {
        
            var deferred = $q.defer();
        
            var image = new Image();
            image.onerror = function() {
                deferred.resolve(false);
            };
            image.onload = function() {
                deferred.resolve(true);
            };
            image.src = src;
        
            return deferred.promise;
        }
    };
});