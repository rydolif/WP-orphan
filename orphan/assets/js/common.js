$(function() {

//---------------------------video-------------------------------
var youtube = $('.youtube');
  $.each(youtube, function(index, el) {
    var source = "https://img.youtube.com/vi/"+ $(el).data('embed') +"/sddefault.jpg";
    var image = new Image();
    image.src = source;
    image.addEventListener( "load", function() {
      youtube[ index ].append( image );
    }( index ) );

  $(el).on('click', function() {
    var iframe = document.createElement( "iframe" );

    iframe.setAttribute( "frameborder", "0" );
    iframe.setAttribute( "allowfullscreen", "" );
    iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ $(this).data('embed') +"?rel=0&showinfo=0&autoplay=1" );
    $(this).innerHTML = "";
    $(this).append( iframe );
    $(this).find('.play-button').hide();
  });
});

//---------------------------jScrollPane-------------------------------
  $('.sos__content_text').jScrollPane();
  $(window).resize(function(event) {
    $('.sos__content_text').jScrollPane();
  });


//---------------------------slider-------------------------------
  var swiper = new Swiper('.history__slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
      nextEl: '.history__next',
      prevEl: '.history__prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 3,
        spaceBetween: 15
      },
      480: {
        slidesPerView: 2,
        spaceBetween: 15
      },
    },
    autoplay: {
      delay: 5000,
    }
  });

  var swiper = new Swiper('.sos__slider', {
    spaceBetween: 30,
    navigation: {
      nextEl: '.sos__next',
      prevEl: '.sos__prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">0' + (index + 1) + '</span>';
      },
    },
    autoplay: {
      delay: 5000,
    }
  });

  var swiper = new Swiper('.realized__slider', {
    slidesPerView: 2.5,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
      nextEl: '.realized__next',
      prevEl: '.realized__prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 15
      },
    },
    autoplay: {
      delay: 5000,
    }
  });

  var swiper = new Swiper('.team__slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
      nextEl: '.team__next',
      prevEl: '.team__prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 15
      },
    },
    autoplay: {
      delay: 5000,
    }
  });

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});

//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<20){
          $('.header').removeClass('header--active');
      }
  });
  if($(this).scrollTop()>10){
      $('.header').addClass('header--active');
  }

  //-------------------------скорость якоря---------------------------------------
    $(".more").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');

        $('.hamburger').removeClass('hamburger--active');
        $('.nav').removeClass('nav--active');
    });

});
