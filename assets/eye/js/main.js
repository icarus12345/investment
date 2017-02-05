
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
    $("img.lazy").each(function(){
        $(this).attr('src',$(this).data('original'));
        $(this.parentNode).nailthumb();
    });
    // if($('#owl-home').length==1){
    //     $("#owl-home").owlCarousel({
    //         autoplay: true,
    //         // autoPlaySpeed: 5000,
    //         autoPlayTimeout: 5000,
    //         loop: 4000,
    //         items : 1,
    //         lazyLoad: true,
    //         nav : true,
    //         animateIn: 'fadeIn', // add this
    //         animateOut: 'fadeOut', // and this
    //         // transitionStyle: "fade",
    //         navText : ["", ""],
    //         // responsive : {
    //         //     0:      {items: 1, nav: true},
    //         //     480:    {items: 2, nav: true},
    //         //     960:    {items: 3, nav: true},
    //         //     1200:   {items: 1, nav: true},
    //         // }
    //         beforeMove: function(){
    //             alert(0)
    //         }
    //     }).on('change.owl.carousel', function( event ) {
    //         setTimeout(function(){
    //             $('.owl-item.active').removeClass('animated')
    //             $('.owl-item.active').removeClass('owl-animated-in')
    //             $('.owl-item.active').removeClass('fadeIn')

    //         },500)
    //     })
    // }
   
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
                480:    {items: 2},
                960:    {items: 3},
                1200:   {items: 3},
            }
        });
    }
    if($('#owl-testimonial').length==1){
        $("#owl-testimonial").owlCarousel({
            autoPlay: true,
            items : 2,
            // lazyLoad: true,
            loop:true,
            center:true,
            nav : false,
            margin: 40,
            dots: false
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