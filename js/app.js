function menuUp () {
   let heightMenu = $('#header').outerHeight();
   $('#slider_baner').css('margin-top', `-${heightMenu}px`);
}

$('.menu_active button').click(function(){
   $(this).toggleClass('active');
   $('.block_header').toggleClass('active');
   $('body').toggleClass('overflow_hidden');
   $('.button_item_search').removeClass('active');
});

$('.close_button button').click(function(){
   $('.menu_active button').removeClass('active');
   $('.block_header').removeClass('active');
   $('body').removeClass('overflow_hidden');
});

$('.active_search').click(function(){
   $('.button_item_search').toggleClass('active');
});

function bulletName () {
   const titleBullet = document.querySelectorAll('.banner_item span');
   const numBullet   = document.querySelectorAll('#slider_baner .swiper-pagination span');
   let arrayNmae = [];
   
   titleBullet.forEach(element => {
      arrayNmae.push(element.textContent);
   });

   numBullet.forEach((element, i) => {
      element.innerHTML = i >= 10 
      ? `<span style="font-size: 18px;">${i += 1}</span> ${arrayNmae[i]}` 
      : `<span style="font-size: 18px;">0${i += 1}</span> ${ arrayNmae[i] }`;
   });
}

$( document ).ready(function($){
   $("#counter").viewportChecker({
   callbackFunction:function(){
      $('.counter_item h5').each(function () {
         $(this).prop('Counter',0).animate({
          Counter: $(this).text() 
          }, {
           duration: 1500,
           easing: 'swing',
           step: function (now) {
              $(this).text(Math.ceil(now));
           }
          });
      }); 
   }
   });
});

$(document).ready(function(){
   $("ul .menu-item").on("click","a", function (event) {
      $('.menu_active button').removeClass('active');
      $('.block_header').removeClass('active');
      $('body').removeClass('overflow_hidden');
       event.preventDefault();
       var id  = $(this).attr('href'),
           top = $(id).offset().top;
       $('body,html').animate({scrollTop: top}, 1500);
   });
});

var swiper = new Swiper(".mySwiper1", {
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
   loop: true
});

var swiper = new Swiper(".mySwiper_banner", {
   loop: true,
   autoplay: {
      delay: 9900,
      disableOnInteraction: false,
   },
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
     renderBullet: function (index, className) {
       return '<span class="' + className + '">' + (index + 1) + "</span>";
     },
   },
});

var swiper = new Swiper(".mySwiper", {
   slidesPerView: 6,
   spaceBetween: 70,
   loop: true,
   autoplay: {
      delay: 2500,
      disableOnInteraction: false,
   },
   breakpoints: {
       320: {
         slidesPerView: 1,
         spaceBetween: 20
       },
       425: {
         slidesPerView: 2,
         spaceBetween: 30
       },
       600:{
         slidesPerView: 3,
         spaceBetween: 30
       },
       750: {
         slidesPerView: 4,
         spaceBetween: 40
       },
       1024: {
         slidesPerView: 6,
         spaceBetween: 70
       }
     }
});

var swiper = new Swiper(".mySwiper_blog", {
   slidesPerView: 3,
   spaceBetween: 30,
   pagination: {
     el: ".swiper-pagination",
   },
   breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      576:{
        slidesPerView: 2,
        spaceBetween: 30
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
    }
});

function gellertWork(heightResize){
   const gelleryImg = document.querySelectorAll('.work_item > a > img');
   let maxHeight = [];

   gelleryImg.forEach(element => {
      maxHeight.push(element.offsetHeight);
   });

   maxHeight = maxHeight.sort((a, b) => {return a - b}).reverse();

   !heightResize
   ? $('.work_list').css('max-height', `${maxHeight[0] + 10}px`)
   : $('.work_list').css('max-height', `100%`);
}

function blogH4Height() {
   const blogItem = document.querySelectorAll('.blog_item h4 + p');
   let blogHeightH4 = [];

   blogItem.forEach(element => {
      blogHeightH4.push(element.offsetHeight);
   });

   blogHeightH4 = blogHeightH4.sort((a, b) => {return a - b}).reverse();

   $('.blog_item h4 + p').css('min-height', `${blogHeightH4[0]}px`)
}

$(window).resize(function() {
   if(document.documentElement.clientWidth > 768) {
      gellertWork();
   } else {
      gellertWork(true);
   }

   blogH4Height();
});

blogH4Height();
gellertWork();
bulletName();
menuUp();