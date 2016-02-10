// Show or hide main menu
$(document).on("click", function (e) {
    e.stopPropagation();
<<<<<<< HEAD
    if (!$(e.target).parent().children(".dropdown-menu").length) {
        $(".dropdown-menu").removeClass("active");
    } else {
        $(e.target).parent().children(".dropdown-menu").toggleClass("active");
=======
    // TODO: USE JQUERY UI FOR EFFECT() IF POSSIBLE
    if (!$(e.target).parent().children(".dropdown-menu").length) {
        $(".dropdown-menu").hide();
    } else {
        $(e.target).parent().children(".dropdown-menu").toggle();
>>>>>>> aacc8f52c84497b50e329842ac2bb2910187cf06
    }
});

// $(".popover-trigger").on("click", function (e) {
//     $(this).children(".popover-top").toggleClass("active");
// });
<<<<<<< HEAD
=======

$(function ($) {
    $(".news-box .content").each(function() {
        var text = $(this).text().substring(0, 200);
        text += " ...";
        $(this).text(text);
    });
}, jQuery);
>>>>>>> aacc8f52c84497b50e329842ac2bb2910187cf06
