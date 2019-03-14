// Slider effect on header
$( document ).ready(function() { 
    $("header").addClass("fadeInDown");
});

// Burger Menu transitions
var count = 0;
$(".burgerMenu").click(function() {
    count++;
    // Var to identify even or odd click
    var isEven = function(someNumber) {
        return (someNumber % 2 === 0) ? true : false;
    };
    // Odd clicks
    if (isEven(count) === false) {
        $("header").addClass("fixedMenu");
        $(".burgerMenu").addClass("showMenu");
        $(".linksMenu").addClass("showMenu");
        $(".navMenu").removeClass("bounceOutUp");
        $(".navMenu").addClass("bounceInDown");
        $(".bgShade").removeClass("hideShade");
        $(".bgShade").addClass("showShade");
        $("body").addClass("bodyStopped");
    }
    // Even clicks
    else if (isEven(count) === true) {
        $("header").removeClass("fixedMenu"); 
        $(".burgerMenu").removeClass("showMenu");
        $(".navMenu").removeClass("bounceInDown");
        $(".navMenu").addClass("bounceOutUp");
        $(".bgShade").removeClass("showShade");
        $(".bgShade").addClass("hideShade");
        $("body").removeClass("bodyStopped");
    }
});

// Animation on header
var $anchor = $('html, body');
$('.anchor').click(function() {
    $("header").removeClass("fixedMenu");
    $(".burgerMenu").removeClass("showMenu");
    $(".navMenu").removeClass("bounceInDown");
    $(".navMenu").addClass("bounceOutUp");
    $(".bgShade").removeClass("showShade");
    $(".bgShade").addClass("hideShade");
    $("body").removeClass("bodyStopped");
    count++;
    $anchor.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

// Burger menu without one extra click
$('.linkHeader').click(function() {
    count++;
});