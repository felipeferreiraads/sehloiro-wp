const small = $(window).width() < 1024 ? true : false

$('.open-menu, .open-menu-mobile').on('click', e => {
    if(!$('.main-menu').hasClass('open')) {
        $('.main-menu').css({
            left: 0
        }).addClass('open')

        $('header').css({
            left: small ? 250 : 300
        })

        $('header span').html('Fechar')

        $('.menu-switch').css({
            left: small ? 250 : 300
        })
    } else {
        $('.main-menu').css({
            left: small ? -250 : -300
        }).removeClass('open')

        $('header').css({
            left: 0
        })

        $('header span').html('Menu')

        $('.menu-switch').css({
            left: 0
        })
    }
})