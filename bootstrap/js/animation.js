
$(document).ready(function(){
  $('.slider').slider();
});


$( ".busca" ).click(function() {
  $( ".campo_busca" ).slideToggle( "1000" );
});

// início do Slide

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:25,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }
})
});


// MENU RETRATIL
    $(window).scroll(function() {               
         if($(this).scrollTop()<150){
            $('.nagevacao1').fadeOut();
         }else{
            $('.nagevacao1').fadeIn();
         }
    });