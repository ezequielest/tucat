
$(window).on('load',function() {
    
    var owl = $(".owl-slider").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        mouseDrag: false,
        animateOut: 'fadeOut',
    });

    setTimeout(() => {
        $('nav').animate({ opacity: 1 }, 1000);
    }, 1000);

    $(".owl-works").owlCarousel();

    efectSlideWords()

    owl.on('changed.owl.carousel', function(event) {
        efectSlideWords ()
    });

});


function efectSlideWords() {
    setTimeout(() => {
        $('.item h3').css('visibility','visible').addClass('animated slideInDown')
    }, 2000);

    setTimeout(() => {
        $('.item p').css('visibility','visible').addClass('animated slideInDown')
    }, 3000);

    setTimeout(() => {
        resetEffect();
    }, 6000);
}

function resetEffect () {
    $('.item h3').css('visibility','hidden').removeClass('animated slideInDown')
    $('.item p').css('visibility','hidden').removeClass('animated slideInDown')
}


$(window).scroll(function(){
    top = $(window).scrollTop();

    if (top > 50 ) {
        $('nav .navbar').css('background-color', '#fff').css('position', 'fixed');
    }else{
        $('nav .navbar').css('background-color', 'transparent').css('position', 'flex');
    }

    if(top === $(window).scrollHeight) {
        $('.item h3').css('display','block').addClass('animated slideInDown')
    } 
});

$('#up').on('click', function() {
    $('html, body').animate({
        scrollTop:0
    }, 'slow');
});
