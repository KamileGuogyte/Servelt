$(document).ready(function () {
    $('select').select2();

    $('.checkbox-wrapper>.checkbox input').on('change', function () {
        $(this).closest('.checkbox-wrapper').toggleClass('toggled');
    });

    $('.site-header .site-header__item--search, .search-panel__close').click(function () {
        $('.search-panel').toggleClass('search-panel--toggled');
    })

    $(".specialists__nav-input").datepicker({
        showButtonPanel: true,
        buttonText: 'Pasirinkti',
        minDate: '+1',
        defaultDate: '+1'
    });

    $('.specialists__nav-current').click(function () {
        $(".specialists__nav-input").datepicker('show');
    })
    // $(".specialists__nav-input").datepicker('show');
})