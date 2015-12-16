$(document).on("click", function (e) {
    e.stopPropagation();
    if (!$(e.target).parent().children(".dropdown-menu").length) {
        $(".active").removeClass("active");
    } else {
        $(e.target).parent().children(".dropdown-menu").toggleClass("active");
    }
});
