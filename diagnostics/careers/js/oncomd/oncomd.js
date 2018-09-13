//custom js

$(document).ready(function() {
   $('a[href*=#]').bind('click', function(e) {
	e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
       
	var target = $(this).attr("href"); //Get the target
			
	// perform animated scrolling by getting top-position of target-element and set it as scroll target
	$('html, body').stop().animate({ scrollTop: $(target).offset().top}, 500, function() {
	     location.hash = target;  //attach the hash (#jumptarget) to the pageurl
	});
			
	return false;
   });

   $('#page-six').click(function() {
   	var target = $(this).attr("href"); //Get the target
   	location.hash = target;

   });

   $('a[href*=#footer-section]').bind('click', function(e) {
      $('.menu-drop-toggle').addClass('hide');
   });

   $('#js-mob-menu').click(function() {
      $('.menu-drop-toggle').removeClass('hide');
   });

   $('#mob-close-butn').click(function() {
      $('.menu-drop-toggle').addClass('hide');
   });

   $('#page-six').click(function() {
      var target = $(this).attr("href"); //Get the target
      location.hash = target;

   });

   var htmlDoc = document.querySelector('html');
   var mainNav = document.querySelector('#mainNav');

   var elements = [
      '#page-one', '#page-two', '#page-three', '#page-four', '#page-five',
   ];

   var sections = [];

   for (var i=0; i<elements.length; i++) {
      var el = document.querySelector(elements[i]);
      el && sections.push(el);
   }
  (function BulletScroller(){
      if (window.innerWidth >767 && window.innerWidth <992) { 
         for (var i=0; i<sections.length; i++) {
            currentThumb =i;
            window.node =sections[i];
            if(((document.body.scrollHeight-node.offsetTop)+170)>=(screen.height)){
               document.querySelector('#mainNav .one-page a:nth-child('+ (currentThumb+1) +')').classList.add('show');
            }else{
               document.querySelector('#mainNav .one-page a:nth-child('+ (currentThumb+1) +')').classList.add('hide');
            }

         }
      }
      window.BulletScroller=BulletScroller;
   })();
   $(window).resize(function(){

      BulletScroller();
   })
   $(window).scroll(function (e) {
         /* Prevent scrolling if mobile menu active */
         // var flag = $('.menu-drop-toggle').hasClass('hide');
         // if(!flag) {
         //    $(window).scrollTop(0);
         //    e.preventDefault();
         //    return;
         // }

   		var scrollTop = document.body.scrollTop || htmlDoc.scrollTop;
         
   		if (scrollTop > 300) {

   			mainNav.classList.add('fade-in');
   		} else {
   			mainNav.classList.remove('fade-in');
   		}


         // Setting active class
         var currentThumb = null;
         for (var i=0; i<sections.length; i++) {
            if ($(sections[i]).offset().top+150 > scrollTop) {
            	currentThumb = i;
               break;
            } 
         }
         

         currentThumb || (currentThumb = sections.length-1);

      	Array.prototype.forEach.call(document.querySelectorAll('#mainNav .one-page a.active'), function (thumb) {
      		thumb.classList.remove('active');
            thumb.classList.remove('hide');
      	});

      	document.querySelector('#mainNav .one-page a:nth-child('+ (currentThumb+1) +')').classList.add('active');
   })
});

(function () {
   // Highight the current menu
   var pathname = window.location.pathname;

   var activeA = document.querySelector('[href="'+ pathname +'"]');

   activeA && activeA.classList.add('active');

})();

// clinician page imge mobile slider start
var slides = Array.prototype.slice.call(document.querySelectorAll('.image'));
 var img     = document.querySelector('.outer .image');
   if(slides && img){
      var current = slides.length-2;
      var outer   = document.querySelector('.outer');
      var style = img.currentStyle || window.getComputedStyle(img);
      var margin = parseInt(style.marginRight.replace("px",""))
      var imgWidth = img.offsetWidth+margin;
      outer.style.opacity = .999999;
      var next = function(){
         if(current<slides.length-1){
            current = current+1;
            outer.style.transform = 'translate(-'+current*imgWidth+'px,0)';
            outer.style.webkitTransform = 'translate(-'+current*imgWidth+'px,0)';
            outer.style.MozTransform = 'translate(-'+current*imgWidth+'px,0)';
         }
         disable();
      }

      var prev = function(){
          outer.classList.add('slide-out');
         if(current>0){
            current = current-1;
            outer.style.transform = 'translate(-'+current*imgWidth+'px,0)';
            outer.style.MozTransform = 'translate(-'+current*imgWidth+'px,0)';
            outer.style.webkitTransform = 'translate(-'+current*imgWidth+'px,0)';
         }
         disable();
      }

      var disable = function(){
         document.querySelector('#prevBtn').removeAttribute('disabled');
         document.querySelector('#nextBtn').removeAttribute('disabled');
         if(current==slides.length-1){
            document.querySelector('#nextBtn').setAttribute('disabled','disabled');
         }

         if(current==0){
            document.querySelector('#prevBtn').setAttribute('disabled','disabled');
         }
      }
      next();

      disable();
   }



// clinician page imge mobile slider End





      
 