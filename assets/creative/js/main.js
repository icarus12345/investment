var jssorHomeSliderInit = function() {
    if($('#home-jssor').length==0)return;
    var strHtml = $('.home-jssor,.home-jssor [data-u="slides"]').html()
    var jssorSlider,StartIndex = 0;
    var captionTransitions = {};
    captionTransitions["O"] = [{b:100,d:1,o:.5}];
    captionTransitions["T100"] = [{b:-1,d:1,y:0,x:0,o:-1},{b:1,d:300,x:0,y:100,o:1}];
    captionTransitions["LR720"] = [{b:-1,d:1,y:0,x:0,o:-1,e:{o:0}},{b:400,d:400,y:0,x:720,o:1}];
    captionTransitions["B400"] = [{b:-1,d:1,y:0,x:0,o:-1},{b:800,d:300,y:-400,x:0,o:1}];
    function init(){
        var w = $(window).width();
        var h = $(window).height();
        if(jssorSlider){
            StartIndex = jssorSlider.$CurrentIndex();
        }
        $('.home-jssor,.home-jssor [data-u="slides"]').html(strHtml);
        $('.home-jssor,.home-jssor [data-u="slides"]').css({
            width: w,
            height: h,
        })
        var jssor_1_options = {
            $StartIndex: StartIndex<0?0:StartIndex,
            $AutoPlay: true,
            $SlideDuration: 1000,
            $SlideEasing: $Jease$.$OutQuint,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            },

            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssorTransitions(w,h),
                $TransitionsOrder: 0,
                $ShowLink: true
            },
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $CaptionTransitions: captionTransitions,
                $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                // $Breaks: [
                //     [{d:2000,b:4000}],
                //     [{d:5000,b:5000}],
                //     [{d:2000,b:21000}],
                //     [{d:10000,b:5000}]
                // ],
                // $Controls: [{r:0},{r:0},{r:0},{r:20},{r:20},{r:20},{r:20},{r:100},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100}]
            },

        };

        jssorSlider = new $JssorSlider$("home-jssor", jssor_1_options);
        
    }
    // init();
    /*responsive code begin*/
    /*you can remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        init();
    //     var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    //     if (refSize) {
    //         refSize = Math.min(refSize, 1920);
    //         jssor_1_slider.$ScaleWidth(refSize);
    //     }
    //     else {
    //         window.setTimeout(ScaleSlider, 30);
    //     }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*responsive code end*/

};
function projectMasonry(){
    if($('#container').length==0)return;
    var elem = document.querySelector('#container');

    var img = {
        22:['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg'],
        21:['101.jpg','102.jpg','103.jpg','104.jpg'],
        12:['201.jpg','202.jpg','203.jpg','204.jpg']
    }
    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
    var boxs = []
    for(var i = 0;i<50;i++){
        var num = random(0,12);
        var ran, size;
        if(num < 2){
            ran = random(0,img['22'].length-1);
            size = 'size22';
        } else if(num < 4) {
            ran = random(0,img['12'].length-1);
            size = 'size12';
        } else if(num < 6) {
            ran = random(0,img['21'].length-1);
            size = 'size21';
        }else{
            ran = random(0,img['22'].length-1);
            size = 'size11';
        }
        boxs.push([
            '<div class="box '+size+'">',
                '<div class="nailthumb">',
                    '<div class="nailthumb-container">',
                        '<img class="lazy" data-original="images/'+img['22'][ran]+'"/>',
                    '</div>',
                    '<div class="nailthumb-mark">',
                        '<div>',
                            '<div class="title">Dự án đầu tư bất động sản</div>',
                            '<div class="author">Dự án đầu tư bất động sản</div>',
                            '<div class="socials">',
                                '<a href="#"><span class="fa fa-facebook"></span></a>',
                                '<a href="#"><span class="fa fa-twitter"></span></a>',
                                '<a href="#"><span class="fa fa-google"></span></a>',
                            '</div>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>'
        ].join('\n'))
    }
    $(elem).html(boxs.join('\n'));
    var msnry;
    function init(){
        if(msnry) msnry.destroy();
        var colsNum = 5;
        var windowWith = $(window).width();
        if(windowWith > 1600){
            colsNum = 5;
        } else if(windowWith > 1200){
            colsNum = 5;
        } else if(windowWith > 960){
            colsNum = 4;
        } else if(windowWith > 720){
            colsNum = 3;
        } else if(windowWith > 480){
            colsNum = 2;
        } else {
            colsNum = 1;
        }
        console.log(colsNum)
        var w = Math.floor(windowWith/colsNum);
        $(elem).css({
            width: w*colsNum,
            height:''
        })
        if(colsNum==1) {
            $('.size11,.size12').width(windowWith);
            $('.size21,.size22').width(windowWith);
        } else {
            
            $('.size11,.size12').width(w);
            $('.size21,.size22').width(w*2);
        }
        msnry = new Masonry( elem, {
          // options
          itemSelector: '.box',
          columnWidth: Math.floor(w)
        });
        $("img.lazy").lazyload({
           load: function() {
               $(this).removeClass('lazy');
               $(this.parentNode).nailthumb();
           }
        });
    }
    $(window).on("load", init);
    $(window).on("resize", init);
    $(window).on("orientationchange", init);
}
function fixLine(){
    function init(){
        $('.banner .banner-content').each(function(){
            var w = $(this).outerWidth();
            var bw = $(this).find('.breardcum').outerWidth();
            var bh = $(this).find('.breardcum').outerHeight();
            var tw = $(this).find('.title').outerWidth();
            var th = $(this).find('.title').outerHeight();
            console.log(w,bw,tw)
            $(this).find('.line').css({
                top: (bh)/2,
                height: (bh+th)/2
            });
            $(this).find('.before-line').css({width: w - bw - 10});
            $(this).find('.after-line').css({width: w - tw - 10});
        });
        // fixBanner();
    }
    $(window).on("load", init);
    $(window).on("resize", init);
    $(window).on("orientationchange", init);
}
function initScrollreveal(){
    // AniJS.createAnimation([{
    //     event: 'click',
    //     eventTarget: 'footer',
    //     behaviorTarget: 'header',
    //     behavior: 'bounceIn',
    //     before: function(e, animationContext){
    //         if( someVariable ){
    //             //Run the animation
    //             animationContext.run()
    //         }
    //     }
    // }]);
    // AniJS.createAnimation([{
    //     event: 'scroll',  //if
    //     eventTarget: 'window',  //on
    //     behavior: 'fadeInUp animated', //do
    //     behaviorTarget: '.service-item', //to
    // }]);
}
function fixBanner(){
    // function init(){
        var w = $(window).outerWidth();
        var scale = w/1920;
        $('.banner>div').css({
            'transform':'scale(' + scale + ')'
        })
    // }
}
function fullPageIntroInit(){
    var length;
    function init(){
        if($('#fullpage').length==0) return;
        length = $('#fullpage .section').length;
        $('.slider-nav.next .number .right,.slider-nav.prev .number .right,.slider-nav.prev .number .left').text(length);
        $('.slider-nav.next').click(function(){
            $.fn.fullpage.moveSectionDown();
        });
        $('.slider-nav.prev').click(function(){
            $.fn.fullpage.moveSectionUp();
        });
        resize();
    }
    function resize(){
        // if ($(window).width() < 768) {
        //     if ($.fn.fullPage) {
        //         $.fn.fullpage.destroy('all');
        //         console.log('Destroy')
        //     }
        // }
        // if ($(window).width() > 768) {
            if(
                $('#fullpage').hasClass('fullpage-wrapper') &&
                !$('#fullpage').hasClass('fp-destroyed')
                ){
                console.log('already')
                return;
            }
            
            $("#fullpage div[data-pos]>div")
                .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                    $(this).removeClass();
                    $(this).parents('.fp-section').removeClass('page-animating')
                })
            $('#fullpage').fullpage({
                fixedElements: '.slider-nav.next, .slider-nav.prev',
                // sectionsColor: ['#fff', '#fff', '#fff', 'fff', '#fff'],
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                // menu: '#menu',
                css3: true,
                scrollingSpeed: 0,
                // loopBottom: true,
                // loopTop: true,
                continuousVertical: true,
                afterResize: function(){
                    console.log('RS')
                    if($(window).width() < 768){
                        // $.fn.fullpage.destroy('all');
                        // $('.slider-nav.next,.slider-nav.prev').unbind('click')
                    }
                    else{
                        // $.fn.fullpage.reBuild();
                    }
                },
                onLeave:function(index, nextIndex, direction){
                    console.log(index, nextIndex, direction)
                    // $("#fullpage>div:eq("+index+") .slider-cap")
                    //     .addClass('zoomOutDown animated')
                    //     .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                    //         $(this).removeClass('zoomOutDown animated');
                    //     })
                    
                    var prevNum = nextIndex-1;
                    var nextNum = nextIndex+1;
                    if(nextNum>length) nextNum = 1;
                    if(prevNum==0) prevNum = length
                    $('.slider-nav.prev .number .left').text(prevNum)
                    $('.slider-nav.next .number .left').text(nextNum)
                    var i = index - 1;
                    $("#fullpage>div[data-index='"+i+"']").addClass('page-animating')
                    if(direction == 'up'){
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='tl']>div")
                            .removeClass()
                            .addClass('slideOutRight animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='tr']>div")
                            .removeClass()
                            .addClass('slideOutDown animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='bl']>div")
                            .removeClass()
                            .addClass('slideOutUp animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='br']>div")
                            .removeClass()
                            .addClass('slideOutLeft animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                    } else if(direction == 'down'){

                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='tl']>div")
                            .removeClass()
                            .addClass('slideOutDown animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='tr']>div")
                            .removeClass()
                            .addClass('slideOutLeft animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='bl']>div")
                            .removeClass()
                            .addClass('slideOutRight animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                        $("#fullpage>div[data-index='"+i+"'] div[data-pos='br']>div")
                            .removeClass()
                            .addClass('slideOutUp animated')
                            // .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            //     $(this).removeClass();
                            //     $("#fullpage>div[data-index='"+i+"']").removeClass('page-animating')
                            // })
                    }
                }
            });
        // }

    }
    $(window).on("load", init);
    $(window).on("resize", resize);
    $(window).on("orientationchange", resize);
}
$(document).ready(function(){
    // if(window.innerWidth>960) $('.navbar-toggle').click();
    $(window).scroll(function(){
        if($(this).scrollTop()>0){
            $('#navbar').addClass('is-fix-top');
        }else{
            $('#navbar').removeClass('is-fix-top');
        }
    });
    $("img.lazy").lazyload({
       load: function() {
           $(this).removeClass('lazy');
           $(this.parentNode).nailthumb();
       }
    });
    // $("img.lazy").each(function(){
    //     $(this).attr('src',$(this).data('original'));
    //     $(this.parentNode).nailthumb();
    // });
    jssorHomeSliderInit();
    projectMasonry();
    fixLine();
    initScrollreveal();
    fullPageIntroInit();
    if($('#owl-partner').length==1){
        $("#owl-partner").owlCarousel({
            autoPlay: false,
            items : 6,
            // lazyLoad: true,
            nav : true,
            margin: 20,
            dots: false,
            navText : ["", ""],
            responsive : {
                0:      {items: 1},
                480:    {items: 2},
                960:    {items: 3},
                1200:   {items: 3},
                1600:   {items: 4},
            }
        });
    }
    if($('#owl-release').length==1){
        $("#owl-release").owlCarousel({
            autoPlay: false,
            items : 4,
            // lazyLoad: true,
            nav : true,
            margin: 20,
            dots: false,
            navText : ["", ""],
            responsive : {
                0:      {items: 1},
                480:    {items: 2},
                960:    {items: 3},
                1200:   {items: 3},
                1600:   {items: 4},
            }
        });
    }
    if($('.swipebox').length>=1)
        $('a.swipebox').swipebox({useCSS: true});
    if($('.validationFrm').length>=1){
            $('.validationFrm').validationEngine({
                'scroll': false,
                'isPopup' : true,
                validateNonVisibleFields:true
            });
    }
    if(typeof WOW == 'function') new WOW().init();
});

$(window).resize(function(){
	$('.nailthumb-image').each(function(){
		$(this.parentNode).nailthumb();
	});
});
function sendRequest(){
    if( $('#sendRequestFrm').validationEngine('validate') === false){
        toastr['warning']('Please complete input data.', 'Warning !');
        return false;
    }
    var params =$('#sendRequestFrm').serializeObject();
    jQuery.ajax({
        type: "POST",
        cache:false,
        timeout:10000,
        data: {params:params},
        dataType: 'json',
        url: '/frontend/excution/sendMessage',
        success: function(data_result) {
            if(data_result.result>0){
                toastr['success'](data_result.message, 'Message !');
                document.sendRequestFrm.reset();
            } else {
                toastr['warning'](data_result.message, 'Warning !');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            toastr['warning']('Sorry. Your request could not be completed. Please check your input data and try again.','Error !');
        }
    });
}
function subcriber(){
    if( $('#subcriberFrm').validationEngine('validate') === false){
        toastr['warning']('Please complete input data.', 'Warning !');
        return false;
    }
    var params =$('#subcriberFrm').serializeObject();
    jQuery.ajax({
        type: "POST",
        cache:false,
        timeout:10000,
        data: {params:params},
        dataType: 'json',
        url: '/frontend/excution/subcriber',
        success: function(data_result) {
            if(data_result.result>0){
                toastr['success'](data_result.message, 'Message !');
                document.subcriberFrm.reset();
            } else {
                toastr['warning'](data_result.message, 'Warning !');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            toastr['warning']('Sorry. Your request could not be completed. Please check your input data and try again.','Error !');
        }
    });
}
function subcriber2(){
    if( $('#subcriberFrm2').validationEngine('validate') === false){
        toastr['warning']('Please complete input data.', 'Warning !');
        return false;
    }
    var params =$('#subcriberFrm2').serializeObject();
    jQuery.ajax({
        type: "POST",
        cache:false,
        timeout:10000,
        data: {params:params},
        dataType: 'json',
        url: '/frontend/excution/subcriber',
        success: function(data_result) {
            if(data_result.result>0){
                toastr['success'](data_result.message, 'Message !');
                document.subcriberFrm2.reset();
            } else {
                toastr['warning'](data_result.message, 'Warning !');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            toastr['warning']('Sorry. Your request could not be completed. Please check your input data and try again.','Error !');
        }
    });
}