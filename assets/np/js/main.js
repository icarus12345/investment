function projectMasonry(){
    if($('#container').length==0)return;
    var elem = document.querySelector('#container');

    var img = {
        22:['/assets/np/images/Layer-9.jpg','/assets/np/images/Layer-10.jpg','/assets/np/images/Layer-11.jpg','/assets/np/images/Layer-12.jpg','/assets/np/images/Layer-13.jpg','/assets/np/images/Layer-14.jpg','/assets/np/images/Layer-15.jpg','/assets/np/images/Layer-16.jpg','/assets/np/images/Layer-7.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        11:['/assets/np/images/Layer-9.jpg','/assets/np/images/Layer-10.jpg','/assets/np/images/Layer-11.jpg','/assets/np/images/Layer-12.jpg','/assets/np/images/Layer-13.jpg','/assets/np/images/Layer-14.jpg','/assets/np/images/Layer-15.jpg','/assets/np/images/Layer-16.jpg','/assets/np/images/Layer-7.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        // 11:['/data/image/1x1/1.jpg','/data/image/1x1/2.jpg','/data/image/1x1/3.jpg','/data/image/1x1/4.jpg','/data/image/1x1/5.jpg','/data/image/1x1/6.jpg','/data/image/1x1/7.jpg','/data/image/1x1/8.jpg','/data/image/1x1/9.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        21:['/data/image/2x1/101.jpg','/data/image/2x1/102.jpg','/data/image/2x1/103.jpg','/data/image/2x1/104.jpg','/data/image/2x1/105.jpg','/data/image/2x1/106.jpg'],
        12:['/data/image/1x2/201.jpg','/data/image/1x2/202.jpg','/data/image/1x2/203.jpg','/data/image/1x2/204.jpg','/data/image/1x2/205.jpg']
    }
    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
    var boxs = []
    var keys = [
        11,11,11,11,
        22   ,11,11,
              11,11,
        11,22   ,11,
        11      ,11,
        11,11,11,11
        ];
    for(var i = 0;i<featuredwork.length;i++){
        var num = random(0,12);
        var ran, size;
        if(num < 2){
            ran = random(0,img['22'].length-1);
            size = 'size22';
        } else if(num < 4) {
            ran = random(0,img['22'].length-1);
            size = 'size22';
            // ran = random(0,img['12'].length-1);
            // size = 'size12';
        } else if(num < 6) {
            ran = random(0,img['21'].length-1);
            size = 'size21';
        }else{
            ran = random(0,img['22'].length-1);
            size = 'size11';
        }
        console.log(keys[i])
        ran = random(0,img[keys[i]].length-1);
        size = 'size'+keys[i];
        boxs.push([
            '<div class="box '+size+'">',
                '<div class="nailthumb">',
                    '<div class="nailthumb-container">',
                        '<img class="lazy" data-original="'+ featuredwork[i]._data.image+'"/>',
                    '</div>',
                    '<a href="project-detail.html" class="nailthumb-mark">',
                        '<div>',
                            '<div>',
                                '<div class="title">'+featuredwork[i]._title+'</div>',
                                '<div class="author">'+ featuredwork[i]._data.address+'</div>',
                                '<div class="socials">',
                                    '<span href="#"><span class="fa fa-facebook"></span></span>',
                                    '<span href="#"><span class="fa fa-twitter"></span></span>',
                                    '<span href="#"><span class="fa fa-google"></span></span>',
                                '</div>',
                            '</div>',
                        '</div>',
                    '</a>',
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
            colsNum = 4;
        } else if(windowWith > 1200){
            colsNum = 4;
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
          columnWidth: Math.floor(w),

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
function projectMasonry2(){
    if($('#container2').length==0)return;
    var elem = document.querySelector('#container2');

    var img = {
        22:['/assets/np/images/Layer-9.jpg','/assets/np/images/Layer-10.jpg','/assets/np/images/Layer-11.jpg','/assets/np/images/Layer-12.jpg','/assets/np/images/Layer-13.jpg','/assets/np/images/Layer-14.jpg','/assets/np/images/Layer-15.jpg','/assets/np/images/Layer-16.jpg','/assets/np/images/Layer-7.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        11:['/assets/np/images/Layer-9.jpg','/assets/np/images/Layer-10.jpg','/assets/np/images/Layer-11.jpg','/assets/np/images/Layer-12.jpg','/assets/np/images/Layer-13.jpg','/assets/np/images/Layer-14.jpg','/assets/np/images/Layer-15.jpg','/assets/np/images/Layer-16.jpg','/assets/np/images/Layer-7.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        // 11:['/data/image/1x1/1.jpg','/data/image/1x1/2.jpg','/data/image/1x1/3.jpg','/data/image/1x1/4.jpg','/data/image/1x1/5.jpg','/data/image/1x1/6.jpg','/data/image/1x1/7.jpg','/data/image/1x1/8.jpg','/data/image/1x1/9.jpg','/data/image/1x1/10.jpg','/data/image/1x1/11.jpg','/data/image/1x1/12.jpg'],
        21:['/data/image/2x1/101.jpg','/data/image/2x1/102.jpg','/data/image/2x1/103.jpg','/data/image/2x1/104.jpg','/data/image/2x1/105.jpg','/data/image/2x1/106.jpg'],
        12:['/data/image/1x2/201.jpg','/data/image/1x2/202.jpg','/data/image/1x2/203.jpg','/data/image/1x2/204.jpg','/data/image/1x2/205.jpg']
    }
    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
    var boxs = []
    var keys = [
        12,11,11,11,
           11,22,
        21,
        11,12,11,

        12,11,11,11,
           11,22,
        21,
        11,12,11,
        ];
    for(var i = 0;i<featuredwork2.length;i++){
        var num = random(0,12);
        var ran, size;
        if(num < 2){
            ran = random(0,img['22'].length-1);
            size = 'size22';
        } else if(num < 4) {
            ran = random(0,img['22'].length-1);
            size = 'size22';
            // ran = random(0,img['12'].length-1);
            // size = 'size12';
        } else if(num < 6) {
            ran = random(0,img['21'].length-1);
            size = 'size21';
        }else{
            ran = random(0,img['22'].length-1);
            size = 'size11';
        }
        ran = random(0,img[keys[i%keys.length]].length-1);
        size = 'size'+keys[i%keys.length];
        boxs.push([
            '<div class="box '+size+'">',
                '<div class="nailthumb">',
                    '<div class="nailthumb-container">',
                        '<img class="lazy" data-original="'+ featuredwork2[i]._data.image+'"/>',
                    '</div>',
                    '<a href="project/'+featuredwork2[i]._alias+'" class="nailthumb-mark">',
                        '<div>',
                            '<div>',
                                '<div class="title">'+featuredwork2[i]._title+'</div>',
                                '<div class="author">'+ featuredwork2[i]._data.address+'</div>',
                                '<div class="socials">',
                                    '<span href="#"><span class="fa fa-facebook"></span></span>',
                                    '<span href="#"><span class="fa fa-twitter"></span></span>',
                                    '<span href="#"><span class="fa fa-google"></span></span>',
                                '</div>',
                            '</div>',
                        '</div>',
                    '</a>',
                '</div>',
            '</div>'
        ].join('\n'))
    }
    $(elem).html(boxs.join('\n'));
    var msnry;
    function init(){
        if(msnry) msnry.destroy();
        var colsNum = 5;
        var windowWith = Math.min(1180,$(window).width()-20);
        if(windowWith > 1600){
            colsNum = 4;
        } else if(windowWith > 1200){
            colsNum = 4;
        } else if(windowWith > 960){
            colsNum = 4;
        } else if(windowWith > 720){
            colsNum = 3;
        } else if(windowWith > 480){
            colsNum = 2;
        } else {
            colsNum = 1;
        }
        var gutter = 10;
        console.log(colsNum)
        var w = Math.floor((windowWith - gutter*(colsNum-1))/colsNum);
        var scale = .82;
        var h = Math.floor(w*scale);
        $(elem).css({
            width: w*colsNum + gutter*(colsNum-1),
            height:''
        })
        if(colsNum==1) {
            w =windowWith; 
            h = Math.floor(w*scale)
            $('.size11,.size12').width(w);
            $('.size21,.size22').width(w);
            $('.size21,.size22').height(h);
            $('.size21,.size22').height(h);
        } else {
            
            $('.size11,.size12').width(w);
            $('.size11,.size21').height(h);
            $('.size21,.size22').width(w*2 + gutter);
            $('.size12,.size22').height(h*2);
        }
        msnry = new Masonry( elem, {
          // options
          itemSelector: '.box',
          columnWidth: Math.floor(w),
          gutter: gutter
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
$(document).ready(function(){
    // if(window.innerWidth>960) $('.navbar-toggle').click();
    $(window).scroll(function(){
        if($(this).scrollTop()>0){
            $('#navbar').addClass('is-fix-top');
        }else{
            $('#navbar').removeClass('is-fix-top');
        }
    });
    // $("img.lazy").lazyload({
    //    load: function() {
    //        $(this).removeClass('lazy');
    //        $(this.parentNode).nailthumb();
    //    }
    // });
    $("img.lazy").each(function(){
        $(this).attr('src',$(this).data('original'));
        var opt={}
        var method = $(this).data('method');
        if(method) opt.method = method
        $(this.parentNode).nailthumb(opt);
    });
    if($('#owl-home').length==1){
        $("#owl-home").owlCarousel({
            autoplay:true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            loop:true,
            items : 1,
            lazyLoad: true,
            nav : true,
            navText : ["", ""],
            // responsive : {
            //     0:      {items: 1, nav: true},
            //     480:    {items: 2, nav: true},
            //     960:    {items: 3, nav: true},
            //     1200:   {items: 1, nav: true},
            // }
        });
    }
    if($('#owl-blog').length==1){
        $("#owl-blog").owlCarousel({
            autoPlay: false,
            items : 3,
            // lazyLoad: true,
            nav : false,
            margin: 20,
            dots: true,
            navText : ["", ""],
            responsive : {
                0:      {items: 1},
                640:    {items: 2},
                960:    {items: 3},
                1200:   {items: 3},
            }
        });
    }
    if($('#owl-testimonial').length==1){
        $("#owl-testimonial").owlCarousel({
            autoPlay: true,
            items : 1,
            dots: true,
            // lazyLoad: true,
            nav : false,
            navText : ["", ""],
            // responsive : {
            //     0:      {items: 1, nav: true},
            //     480:    {items: 2, nav: true},
            //     960:    {items: 3, nav: true},
            //     1200:   {items: 1, nav: true},
            // }
        });
    }
    if($('#owl-product').length==1){
        $("#owl-product").owlCarousel({
            autoPlay: true,
            items : 1,
            dots: true,
            // lazyLoad: true,
            nav : true,
            navText : ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            // responsive : {
            //     0:      {items: 1, nav: true},
            //     480:    {items: 2, nav: true},
            //     960:    {items: 3, nav: true},
            //     1200:   {items: 1, nav: true},
            // }
        });
    }
    projectMasonry()
    projectMasonry2()
    if($('.swipebox').length>=1)
        $('a.swipebox').swipebox({useCSS: true});
    if($('.validationFrm').length>=1){
            $('.validationFrm').validationEngine({
                'scroll': false,
                'isPopup' : true,
                validateNonVisibleFields:true
            });
    }
});


$(window).resize(function(){
	$('.nailthumb-image').each(function(){
        var opt={}
        var method = $(this).data('method');
        if(method) opt.method = method
		$(this.parentNode).nailthumb(opt);
	});
});
