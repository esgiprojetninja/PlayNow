// TODO Lcean this mess



// $(function ($) {
//     $("#slide1").css({
//         "position": "fixed",
//         "top": 0
//     });
//     var lastScroll = $(window).scrollTop();
//     var slides = ["#slide1", "#slide2"];
//     var currentSlide = slides[0];
//     // $.foreach()
//     $(window).bind("scroll", function() {
//         $("#slide1").css("position", "relative");
//         var newScroll = $(window).scrollTop();
//         if (newScroll > lastScroll) {
//             // Scroll Down
//             $("body").stop(true, false).animate({
//                 scrollTop : $("#slide2").offset().top
//             }, 200 );
//             console.debug("Down !");
//         }
//         else if (newScroll < lastScroll) {
//             // Scroll up
//             $("body").stop(true, false).animate({
//                 scrollTop : $("#slide1").offset().top
//             }, 200 );
//             console.debug("Up !")
//         }
//         lastScroll = newScroll;
//     });
//     console.debug(lastScroll);
//     $(window).scrollTop($("#slide1").offset().top);
// });