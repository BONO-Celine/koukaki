   
 //******************************************************************************** */
// ************Apparition des sections au scroll avec interserction observer ********
//******************************************************************************** */

const sectionsObserver = new IntersectionObserver((entries) => { 
  entries.forEach((entry) => {
      if (entry.isIntersecting) {
          entry.target.classList.add("fade-in");
      } 
  });
}, { threshold: 0.5 });

document.querySelectorAll(".element-to-animate").forEach(siteSection => sectionsObserver.observe(siteSection)); 


//******************************************************************************** */
// **************ACCELERATION des fleurs avec IntersectionObserver *****************
//******************************************************************************** */

const root = document.documentElement;
const flowersObserver = new IntersectionObserver ((entries) => { 
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      root.style.setProperty("--flowers-rotation-speed", "5s");
    } else {
      root.style.setProperty("--flowers-rotation-speed", "20s");
    }
  });
}, { threshold: 0.9 });

// Pour observer les éléments

document.querySelectorAll(".observed-element").forEach(siteSection => flowersObserver.observe(siteSection)); //ok


//********************************************************************************
/* **************AJOUT D'UNE CLASSE POUR ANIMER LES TITRES **********************/
/* **************AU SCROLL AVEC INTERSECTION OBSERVER ***************************/
//********************************************************************************

const titlesObserver = new IntersectionObserver((entries) => { 
  entries.forEach((entry) => {
      if (entry.isIntersecting) {
          entry.target.classList.add("titles-animation");
      } 
  });
}, { threshold: 0.9 });

document.querySelectorAll("h2>span, h3>span").forEach(title => titlesObserver.observe(title)); 

//***********************************************************************
/* ******************* EFFET PARALLAXE HERO HEADER ******************** */
//***********************************************************************
jQuery(function(){ 
  $(document).ready(function() {   
    $(window).scroll(function() {
      // effet de parallaxe sur l'élément 'banner-container'
      $('.banner-container').css({
        'transform': 'translateY(' + ($(this).scrollTop() * 0.7) + 'px)'
      });
      //effet de parallaxe sur l'élément 'hero-header__logo'
      $('.hero-header__logo').css({
        'transform': 'translate(-50%, -50%) translateY(' + ($(this).scrollTop() * -0.7) + 'px)'
      });
    });
  });
});


  //*******************************************************
  /* ******************* Swipper js ******************** */
  //*******************************************************

 // Initialiser Swiper

const swiper = new Swiper(".swiper-main-container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  loopedSlides:2,
  loopAdditionalSlides:1,

  centeredSlides: true,

  autoplay:{
    delay: 2000
  },

  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
});

  //*****************************************************************************
  /* ******** INTERSECTION OBSERVER ANIMATION AU SCROLL (nuages) ************* */
  //*****************************************************************************
/*
  function manageIntersection(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('move-clouds') //On ajoute la classe
      } else {
        entry.target.classList.remove('move-clouds') //On supprime la classe
      }
    });
  }  

const cloudsObserver = new IntersectionObserver(manageIntersection, { threshold: 0.5 })
// Pour observer l'élément "place__clouds"
cloudsObserver.observe(document.querySelector('.place__clouds')) 
*/

  //**********************************************************************************
  /* ******** VERSION CORRIGEE DEPLACEMENT HORIZONTAL AU SCROLL (nuages) ************* */
  //**********************************************************************************
 
jQuery(function() {
  $(document).ready(function () {
    const clouds = $('.place__clouds');
    const initialPosition = parseInt(clouds.css('right'), 10);
    const containerPosition = $('#place').offset().top;
    const offset = (containerPosition + clouds.height()) - $(window).height();

    $(window).on('scroll', function () {
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > offset) {
            var newRightPosition = initialPosition + (scrollPosition - offset);
            newRightPosition = Math.min(initialPosition + 300, newRightPosition);
            console.log(newRightPosition);
            clouds.css('right', newRightPosition + 'px');
        }
    });
});
});
 

//********************************************************************************
// ************** MENU BURGER et Ouverture et fermeture OVERLAY *****************
//***************************************************************************** */

var $ = jQuery; // pour pouvoir utiliser $ malgré la version noConflict de jQuery présente dans WordPress
jQuery(function(){
  $('.burger-icon, .overlay').click(function(){
     $('.burger-icon').toggleClass('icon-toggle');
     $('.overlay').toggleClass('open');            
  });  
});
