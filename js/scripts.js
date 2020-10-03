$(document).ready(function () {
    $('select').select2();

    $('.checkbox-wrapper>.checkbox input').on('change', function () {
        $(this).closest('.checkbox-wrapper').toggleClass('toggled');
    });

    $(".specialists__nav-input").datepicker({
        showButtonPanel: true,
        buttonText: 'Pasirinkti',
        minDate: '+1',
        defaultDate: '+1'
    });

    $('.specialists__nav-current').click(function () {
        $(".specialists__nav-input").datepicker('show');
    })
    $(".specialists__nav-input").datepicker('show');
})