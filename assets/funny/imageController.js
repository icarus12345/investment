app.controller('imageController', function($rootScope, $scope, $http, $sce, toastr) {
    var old_url;
    var apikey = '1277df3dc8367f8fa8015d';
    $scope.shownavbarbottom = true;
    $scope.trustSrc = function(src) {
        return $sce.trustAsResourceUrl(src);
    }
    function validImage(url, callback,timeoutT) {
        return new Promise(function (resolve, reject) {
            var timeout = timeoutT || 5000;
            var timer, img = new Image();
            img.onerror = img.onabort = function () {
                clearTimeout(timer);
                callback(url, "error");
                reject("error");
            };
            img.onload = function () {
                clearTimeout(timer);
                callback({
                    url:url,
                    type:'image'
                }, "success");
                resolve("success");
            };
            timer = setTimeout(function () {
                // reset .src to invalid URL so it stops previous
                // loading, but doesn't trigger new load
                callback(url, "timeout");
                reject("timeout");
            }, timeout);
            img.src = url;
        });
    }
    function validVideo(url, callback){
        if (url != undefined || url != '') {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
            if (match && match[2].length == 11) {
                // Do anything for being valid
                // if need to change the url to embed url then use below line
                callback({
                    url:'https://www.youtube.com/embed/' + match[2] + '?autoplay=0',
                    id: match[2],
                    type: 'youtube'
                },'success');
            }
            else {
                var video = document.createElement('video');

                video.onloadstart  = function() {
                    console.log('success, it exsist',video.readyState);
                    // show video element
                }

                video.onerror = function() {
                    console.log('error, couldn\'t load');
                    // don't show video element
                    callback(undefined, "error");
                }
                video.oncanplaythrough = function() {
                    console.log("This file can be played in the current browser");
                    callback({
                        url: url,
                        type: 'video'
                    },'success');
                };
                video.src = url;
            }
        }
    }
    $scope.showVideo =
    $scope.showImage = function(rs){
        $scope.pdata.info = rs;
        $scope.$apply();
    }
    $scope.onPreview = function(){
        // clear info;
        if($scope.pdata.url == old_url) return;
        $scope.pdata.info = undefined;
        if($scope.pdata.urlValid){
            // check image
            old_url = $scope.pdata.url;
            validImage($scope.pdata.url,function(rs, status){
                if(status == 'success'){
                    $scope.showImage(rs);
                } else {
                    // check video
                    validVideo($scope.pdata.url,function(rs, status){
                        if(status == 'success'){
                            console.log('rs',rs)
                            $scope.showVideo(rs);
                        }
                    });
                }
            });
        }
    }
    $scope.pdata = {
        'title':'',
        'url': '',
    };
    $scope.save = function(){
        if($scope.pdata.formValid){
            var params = {
                title: $scope.pdata.title,
                url: $scope.pdata.info.url,
                type: $scope.pdata.info.type
            }
            if($scope.pdata.info.id){
                params.id = $scope.pdata.info.id;
            }
            
            $http({
                url:'/image/onAddImage',
                method:'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                data: params,
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