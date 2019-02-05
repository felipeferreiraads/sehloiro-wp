import 'jquery-mousewheel'

if($(window).width() > 1024) {
    $('.media-posts').mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30)
        event.preventDefault()
    })
}