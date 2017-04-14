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
$(document).ready(function(){
    if($(".slice-slider-container").length==1){


        jQuery(".slice-slider-container").sliceSlider({speed:1000});
        $('.service-list>div>div').click(function(){
            var index = $(this).parent().index();
            console.log(index)

            $(this).parents('.service-list').find('.active').removeClass('active');
            $(this).parent().addClass('active');
            $(this).parents('.service-list').next().find('.active').removeClass('active');
            $(this).parents('.service-list').next().find('>div:eq(' + index + ')').addClass('active');
        })
    }
    $('.menu').click(function(){
        $('body').toggleClass('in')
    })

    $.print = function(dict) {
        console.log(dict)
        return JSON.stringify(dict);
    }
    $(document)
        .route('/', function(request) {
            console.log('/: ' + $.print(request.params));
            gotopage(0)
        }).route('home/', function(request) {
            console.log('about: ' + $.print(request.params));
            gotopage(0)
        }).route('about/', function(request) {
            console.log('about: ' + $.print(request.params));
            gotopage(1)
        }).route('process/', function(request) {
            console.log('process: ' + $.print(request.params));
            gotopage(2)
        }).route('service/', function(request) {
            console.log('service: ' + $.print(request.params));
            gotopage(3)
        }).route('contact/', function(request) {
            console.log('contact: ' + $.print(request.params));
            gotopage(4)
        }).route('book/:id/', function(request, id) {
            console.log('book ' + id + ': ' + $.print(request.params));
        }).route('book/:id/note/:noteId#[0-9]+#/', function(request, id, noteId) {
            console.log('book ' + id + ', note ' + noteId + ': ' + $.print(request.params));
        });
    // Bind hashchange event
    function hashchange(e, triggered) {
        var hash = location.hash.replace(/^#/, '');
        if (hash) {
            var match = $.routeMatches(hash);
            if (match) {
                var template = $(match.route.template);
                if (template.length) {
                    var text = match.route.callback.apply(match.route.callback, match.args);
                    template.text(text);
                }
            }
        }
    }
    hashchange();
    $(window).bind('hashchange', hashchange);
})
