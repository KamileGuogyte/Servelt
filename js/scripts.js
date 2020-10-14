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
    $('body').customCalendar();

    $('#search').autocomplete({
        minLength: 0,
        source: function (request, response) {
            $.ajax({
                url: "https://api.mocki.io/v1/8ae023cd",
                // dataType: "jsonp",
                // data: {
                //     term: request.term
                // },
                success: function (data) {
                    console.log(data);
                    response(data);
                }
            });
        },
        // focus: function (event, ui) {
        //     // $("#project").val(ui.item.label);
        //     // return false;
        // },
        select: function (event, ui) {
            console.log(ui);
            $("#project").val(ui.item.label);
            $("#project-id").val(ui.item.value);
            $("#project-description").html(ui.item.desc);
            $("#project-icon").attr("src", "images/" + ui.item.icon);

            return false;
        }
    }).focus(function () {
        // The following works only once.
        // $(this).trigger('keydown.autocomplete');
        // As suggested by digitalPBK, works multiple times
        // $(this).data("autocomplete").search($(this).val());
        // As noted by Jonny in his answer, with newer versions use uiAutocomplete
        $(this).data("uiAutocomplete").search($(this).val());
    }).autocomplete("instance")._renderItem = function (ul, item) {
        console.log(item);
        return $("<li>")
            .append("<div class='autocomplete-product'><span class='autocomplete-product-title'>" + item.title + "</span><span class='autocomplete-product-desc'>" + item.about + "</span><span class='autocomplete-product-duration'>" + item.duration + "</div>")
            .appendTo(ul);
    };


    // autocomplete results width fix
    jQuery.ui.autocomplete.prototype._resizeMenu = function () {
        console.log(this.element.outerWidth());
        this.menu.element.css('width', this.element.outerWidth());
    }

    $('.venue__slider').slick({
        arrows: true,
        dots: false,
        slidesToShow: 1,
        // slides
    })
    $('.venue__description-more').click(function () {
        $(this).closest('.venue__description').addClass('venue__description--visible')
    })
})

$(window).scroll(function () {
    // sliding menu active on scroll
    if (!$('.sliding-menu').length) return;

    var scrollDistance = $(window).scrollTop();

    $('*[data-nav-section]').each(function (i) {
        if ($(this).position().top <= scrollDistance) {
            $('.sliding-menu li').removeClass('active');
            $('.sliding-menu li').eq(i).addClass('active');
        }
    });
}).scroll();

$.fn.customCalendar = function () {
    var date = moment('2020-01-01'),
        data = [
            '2020-01-01 10:00',
            '2020-01-01 11:00',
            '2020-01-01 12:00',
            '2020-01-01 13:00',
            '2020-01-01 16:00',
            '2020-01-02 10:00',
            '2020-01-03 10:00',
            '2020-01-04 12:35',
            '2020-01-04 11:35',
            '2020-01-05 08:00',
            '2020-01-05 09:00',
        ],
        week = [],
        rows = 0;

    for (var $i = 0; $i < 7; $i++) {
        var weekDate = date.clone().add($i, 'days');
        week[weekDate.format('YYYY-MM-DD')] = [];
    }
    $.each(data, function (i, v) {
        week[moment(v).format('YYYY-MM-DD')].push(moment(v).format('HH:mm'));
        if (week[moment(v).format('YYYY-MM-DD')].length > rows) rows = week[moment(v).format('YYYY-MM-DD')].length;
    })

    // sort times
    Object.keys(week).forEach(function (v, i) {
        week[v] = week[v].sort(function (a, b) { return moment(v + ' ' + a).unix() - moment(v + ' ' + b).unix() })
    });

    var obj = $('#test'),
        str = '',
        thead = '',
        tbody = $('<tbody/>', {
            html: function () {
                var x = '';
                for (var i = 0; i < rows; i++) {
                    x += '<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                }
                return x;
            }
        });


    Object.keys(week).forEach(function (v, i) {
        thead += '<td>' + moment(v).format('ddd') + '<small>' + moment(v).format('MMMD') + '</small></td>';

        $.each(week[v], function (vv, ii) {
            var col = tbody.find('tr:eq(' + vv + ') td:eq(' + i + ')');
            col.append('<p>' + ii + '</p>');
        })
    })

    str = $('<table class="calendar"><thead><tr>' + thead + '</tr></thead>' + tbody.html() + '</table>');

    obj.append(str);
}

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