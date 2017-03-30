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