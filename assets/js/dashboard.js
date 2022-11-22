$(document).ready(function(){
    $('.carousel').slick({
        dots: true,
        arrows: true,
        infinite: false,
        speed: 300,
        cssEase: 'ease-out',
        slidesToShow: 6,
        slidesToScroll: 2,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              variableWidth: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,    
              variableWidth: false
            }
          },
          {
            breakpoint: 431,
            settings: {  
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: false
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
})