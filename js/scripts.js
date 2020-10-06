$(document).ready(function () {
    $('select').select2();

    $('.checkbox-wrapper>.checkbox input').on('change', function () {
        $(this).closest('.checkbox-wrapper').toggleClass('toggled');
    });

    $('.site-header .site-header__item--search, .search-panel__close').click(function () {
        $('.search-panel').toggleClass('search-panel--toggled');
    })
    // $('.site-aside input[type="radio"]').on('click', function () {
    //     if ($(this).prop('checked') === true) {
    //         console.log('asd');
    //         $(this).prop('checked', false);
    //         $(this).trigger('change');
    //     }
    // })
    $(".product__nav-input").datepicker({
        showButtonPanel: true,
        buttonText: 'Pasirinkti',
        minDate: '+1',
        defaultDate: '+1'
    });

    $('.product__nav-current').click(function () {
        $(".product__nav-input").datepicker('show');
    })
    // $(".product__nav-input").datepicker('show');
})


function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('.site-header').removeClass('site-header--show');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('.site-header').addClass('site-header--show');
        }
    }

    lastScrollTop = st;
}

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 70;
var navbarHeight = $('.site-header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);