
$(document).ready(function(){
    if(window.innerWidth>960) $('.navbar-toggle').click();
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
        $(this.parentNode).nailthumb();
    });
    if($('#owl-home').length==1){
        $("#owl-home").owlCarousel({
            autoPlay: false,
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
    if($('#owl-blog').length==1){
        $("#owl-blog").owlCarousel({
            autoPlay: false,
            items : 4,
            // lazyLoad: true,
            nav : false,
            margin: 20,
            dots: true,
            navText : ["", ""],
            responsive : {
                0:      {items: 1},
                480:    {items: 2},
                960:    {items: 3},
                1200:   {items: 4},
            }
        });
    }
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
                0:      {items: 2},
                480:    {items: 3},
                960:    {items: 4},
                1200:   {items: 6},
            }
        });
    }
    initGallery();
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

var owlGallery,owlGallery2;
function initGallery(type){
    if($('#owl-gallery').length==0) return;
    if(!owlGallery && $('#owl-gallery').length==1){
        owlGallery = $("#owl-gallery").owlCarousel({
            autoPlay: false,
            items : 10,
            // lazyLoad: true,
            loop:true,
            margin: 20,
            nav : false,
            dots: false,
            navText : ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive : {
                0:      {items: 3},
                480:    {items: 3},
                768:    {items: 4},
                960:    {items: 5},
                1200:    {items: 6},
                1600:   {items: 8},
            }
        });
    }
    if(!owlGallery2 && $('#owl-gallery2').length==1){
        owlGallery2 = $("#owl-gallery2").owlCarousel({
            autoPlay: false,
            items : 10,
            center: true,
            loop:true,
            // lazyLoad: true,
            margin: 20,
            nav : false,
            dots: true,
            navText : ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive : {
                0:      {items: 3},
                480:    {items: 3},
                768:    {items: 4},
                960:    {items: 5},
                1200:    {items: 6},
                1600:   {items: 8},
            }
        });
    }
    var n = $('#owl-gallery .item').length;
    var n2 = $('#owl-gallery2 .item').length;
    for(i = n-1;i>=0;i--){
        owlGallery.trigger('remove.owl.carousel', i );
    }
    for(i = n-1;i>=0;i--){
        owlGallery2.trigger('remove.owl.carousel', i );
    }
    for (i = 0; i < data.length; i++) {
        if(type == undefined || data[i].type == type){
            if(i%2==0)
                owlGallery.owlCarousel('add', '<div class="item"><a href="' + data[i].url +'" class="cover" style="background-image:url(' + data[i].data +')"></a></div>' );
            else
                owlGallery2.owlCarousel('add', '<div class="item"><a href="' + data[i].url +'" class="cover" style="background-image:url(' + data[i].data +')"></a></div>' );
        }
    };
    if(owlGallery){
        owlGallery.trigger('update.owl.carousel');
        owlGallery.trigger('refresh.owl.carousel');
    }
    if(owlGallery2){
        owlGallery2.trigger('update.owl.carousel');
        owlGallery2.trigger('refresh.owl.carousel');
    }
    

}
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