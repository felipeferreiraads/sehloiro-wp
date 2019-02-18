import 'jquery-mousewheel'

if($(window).width() > 1024) {
    $('.media-posts').mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30)
        event.preventDefault()
    })

    var scroll = 480
    $('.scroll-left').on('click', function(e) {
        e.preventDefault()
        $('.media-posts').scrollLeft(scroll)
        scroll += 480
    })
}
