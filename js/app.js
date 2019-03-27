jQuery(document).ready(function($) {

  $('#open-menu').click(function(){
    $('.collapse').slideToggle();
    $(this).toggleClass('open');
    return false;
  });

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(".header").addClass("header-shadow");
    } else {
      $(".header").removeClass("header-shadow");
    }
  });

  var container = document.querySelector('.reference_gallery');
  var msnry = new Masonry( container, {
    columnWidth: '.gallery-item',
    itemSelector: '.gallery-item',
  });

  let btn = document.querySelector(".load-more");
  let galleryItems = document.querySelectorAll(".gallery-item-wrapper");
  let arrayGalleryItems = Array.from(galleryItems);

  window.onload = function (){
    let notClass = arrayGalleryItems.slice(3);
    notClass.forEach((el) =>{
      el.classList.add('box-hidden');
    });
    msnry.layout();
  };


  btn.addEventListener("click", (e) => {
    e.preventDefault();

    let boxHidden = document.querySelectorAll(".box-hidden");
    let arrayItems = Array.from(boxHidden);
    if (arrayItems.length >= 3 ) {
     btn.textContent = "Zobraziť viac";
     let deleteItems = arrayItems.splice(0, 3);
     deleteItems.forEach((el) =>{
       el.classList.remove('box-hidden');
     });
    } else {
        btn.textContent = " ";
    };

    /* else if (arrayItems.length < 3) {
     btn.textContent = "Zobraziť menej";
     let hideAgain = arrayGalleryItems.slice(-6);
     hideAgain.forEach((el) => {
       el.classList.add('box-hidden');
     });
   }*/
    console.log(arrayGalleryItems);
    console.log(arrayItems);
    msnry.layout();
  });


  var offs;
  if($(window).width() < 768) {
    offs = 30;
  }
  else {
    offs = 150;
  }
  $('.contact-btn').click(function () {
      $('html, body').animate({
          scrollTop: $('#footer').offset().top - offs
      }, 500);
      return false;
  });
  $('.gallery-item').click(function(){
    $(this).parent().find('.gallery-popup').fadeIn();
    $('body').toggleClass('scroll-disable');
  });
  $('.close-popup').click(function(){
    $('.gallery-popup').fadeOut();
    $('body').toggleClass('scroll-disable');
  });


  $('a').on('click', function(event) {
    if (this.hash !== "") {
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - offs
      }, 800, function(){
      window.location.hash = hash;
      });
    }
  });

  AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: -300, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-top',
  });
});