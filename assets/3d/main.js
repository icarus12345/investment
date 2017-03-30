$(document).ready(function(){
    $('.service-list>div>div').click(function(){
        var index = $(this).parent().index();
        console.log(index)

        $(this).parents('.service-list').find('.active').removeClass('active');
        $(this).parent().addClass('active');
        $(this).parents('.service-list').next().find('.active').removeClass('active');
        $(this).parents('.service-list').next().find('>div:eq(' + index + ')').addClass('active');
    })
    $('.menu').click(function(){
        $('body').toggleClass('in')
    })
})
function gotopage(p){
    $('body').removeClass('in')
    $('.pagination>.point:eq('+p+')').click()
}
function showitem(n){
    // $('.slice-slider-slide-right .interes>.service-item:eq('+n+')>div').click();
    $('.slice-slider-slide.active .slice-slider-slide-right .service-list').find('.active').removeClass('active');
    $('.slice-slider-slide.active .slice-slider-slide-right .service-list').find('>.service-item:eq('+n+')').addClass('active');
    $('.slice-slider-slide.active .slice-slider-slide-right .service-list').next().find('.active').removeClass('active');
    $('.slice-slider-slide.active .slice-slider-slide-right .service-list').next().find('>div:eq(' + n + ')').addClass('active');
    console.log(n)
}