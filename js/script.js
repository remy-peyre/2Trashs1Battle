
$(document).ready(function () {
    $(".menu-btn #open_close").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
        $('.size_img_menu_open').attr('src') == '../css/trashclose.png' ? $('.size_img_menu_open').attr("src", "../css/trashopen.png") : $('.size_img_menu_open').attr("src", "../css/trashclose.png");
    });


    $('.overlay').on('click', function () {
        $(".overlay").fadeToggle(200);
        $(".menu-btn #open_close").toggleClass('btn-open').toggleClass('btn-close');
        $('.size_img_menu_open').attr("src", "../css/trashclose.png");

    });

    var $input = $('.form-fieldset > input');

    $input.blur(function (e) {
        $(this).toggleClass('filled', !!$(this).val());
    });

});
