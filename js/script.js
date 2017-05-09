
$(document).ready(function () {
    $(".menu-btn #open_close").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
        $('body').css('overflow','hidden');
    });
    $('.overlay').on('click', function () {
        $(".overlay").fadeToggle(200);
        $(".menu-btn #open_close").toggleClass('btn-open').toggleClass('btn-close');
        $('body').css('overflow','auto');
    });
    /*$('.menu a').on('click', function () {
        $(".overlay").fadeToggle(200);
        $(".menu-btn a").toggleClass('btn-open').toggleClass('btn-close');
    });*/

    var $input = $('.form-fieldset > input');

    $input.blur(function (e) {
        $(this).toggleClass('filled', !!$(this).val());
    });
});

/*
var $input = $('.form-fieldset > input');

$input.blur(function (e) {
    $(this).toggleClass('filled', !!$(this).val());
});*/