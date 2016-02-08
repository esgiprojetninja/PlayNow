// Show or hide main menu
$(document).on("click", function (e) {
    e.stopPropagation();
    if (!$(e.target).parent().children(".dropdown-menu").length) {
        $(".dropdown-menu").removeClass("active");
    } else {
        $(e.target).parent().children(".dropdown-menu").toggleClass("active");
    }
});

// $(".popover-trigger").on("click", function (e) {
//     $(this).children(".popover-top").toggleClass("active");
// });

$(function ($) {
    $(".news-box .content").each(function() {
        var text = $(this).text().substring(0, 100);
        text += " ...";
        $(this).text(text);
    });
}, jQuery);
