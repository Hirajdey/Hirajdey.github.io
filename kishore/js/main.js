$(document).ready(function() {
    
(function(){

    const heroBannerSlider = document.querySelectorAll('.catlink a');
    heroBannerSlider[0].classList.add('actives');

  })();

  $('.produts-heading li a').click(function() {

    $('.produts-heading li a.active').removeClass('active');
    $(this).addClass('active');
});
  
    /*================================
  =    hamburger-menu           =
  ================================*/
     $('.hamburger-menu').click(function(event) {
        $(this).toggleClass('mm-close');
        $('.navigations ul').slideToggle();
      });
    
       /*================================
  =    owl-carousel-testimonials      =
  ================================*/

  $('.pb-testimonial').owlCarousel({
    loop:true,
    margin:10,
    autoplay : true,
    dots: false,
    nav: true,
    navText:["<div class='fas fa-angle-left'></div>","<div class='fas fa-angle-right'></div>"],
    navClass: ['owl-prev', 'owl-next'],
    responsive:{
        0:{
            items:1
        },
    }
})
      /*================================
  =    Banner Carousel         =
  ================================*/ 
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
   
    dots:true,
    center: true,
	margin: 0,
	lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
  /*================================
  =    Products Filtering          =
  ================================*/
  (function(){

    let filter = '';
    // const typeLinks = document.querySelectorAll('.typeLink a');
    const catlinks = document.querySelectorAll('.catlink a');
    const productCols = document.querySelectorAll('.blogarticlecol');
    
    // default listing
    // for(let prdCol of productCols){
    //   const pId = prdCol.getAttribute('id');
    //   if (pId.toUpperCase().includes('Commercial'.toUpperCase())) {
    //     prdCol.style.display = 'flex';
    //   } 
    //   else {
    //     prdCol.style.display = 'none';
    //   }
    // }

    // for top menu filtering
    for(let catlink of catlinks){
      catlink.onclick = function(){
        const thisText = this.textContent;
        for(let prdCol of productCols){
          const thisAttr = prdCol.getAttribute('id');

          if (filter) {
            if(thisAttr.toUpperCase().includes(thisText.toUpperCase()) && thisAttr.toUpperCase().includes(filter.toUpperCase())){
                prdCol.style.display = 'block'; 
              }
              else{
               prdCol.style.display = 'none';
              }
          } else {
              if(thisAttr.toUpperCase().includes(thisText.toUpperCase())){
                prdCol.style.display = 'block'; 
              }
              else{
               prdCol.style.display = 'none';
              }
          }
        }     
      }
    }
    // for box filtering
    for(let typeLink of typeLinks){
      typeLink.onclick = function(){
        const thisText = this.textContent;
        filter = 'thisText';
        for(let prdCol of productCols){
          const thisAttr = prdCol.getAttribute('id');
          if(thisAttr.toUpperCase().includes(thisText.toUpperCase())){
            prdCol.style.display = 'block'; 
          }
          else{
             prdCol.style.display = 'none';
          }
        }     
      }
    }
    
  })();


 
  
   });
