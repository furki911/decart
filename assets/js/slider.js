$(document).ready(function(){
    for (var i=1; i <= $('.slider__slide').length; i++){
        $('.slider__indicators').append('<div class="slider__indicator" data-slide="'+i+'"></div>')
    }
    setTimeout(function(){
        $('.slider__wrap').addClass('slider__wrap--hacked');
    }, 1000);
})

function goToSlide(number){
    $('.slider__slide').removeClass('slider__slide--active');
    $('.slider__slide[data-slide='+number+']').addClass('slider__slide--active');
}

function goOn() {
    var currentSlide = Number($('.slider__slide--active').data('slide'));
    var totalSlides = $('.slider__slide').length;
    currentSlide++
    if (currentSlide > totalSlides){
        currentSlide = 1;
    }
    goToSlide(currentSlide);
}

// Infinte Loop for Slider
(function(delay, callback) {
    var loop = function() {
        callback();
        setTimeout(loop, delay);
    };     
    loop();
})(5000, function() {
    goOn();
});

$('.slider__next, .go-to-next').on('click', function(){
    goOn();
});