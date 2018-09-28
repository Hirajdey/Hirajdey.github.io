

$(function() {
    $( "#datepicker" ).datepicker();
    $( "#chequedate" ).datepicker();
    $( "#custdate" ).datepicker();
    $( "#admdate" ).datepicker();
    $( "#coadmdate" ).datepicker();
  } );

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          500:{
              items:2,
              nav:true
          },
          768:{
              items:3,
              nav:true
          },

          992:{
              items:3,
              nav:true,
          }
      }
  })
});

   
$(document).ready(function(){
  $(".sec-heading").click(function(){
    $(this).siblings(".sec-content-body").slideToggle('');
    $(this).children('.minus, .icon-plus').toggleClass("minus icon-plus");
  });


    $(".click-seed-treat").click(function(e){
     e.preventDefault();
        $(".content-body-seed-trt").slideDown(300);
   });

   $(".click-nursery").click(function(e){
         e.preventDefault();
       $(".content-body-nursery").slideDown(300);

   });


   $(".click-transplantation").click(function(e){
       e.preventDefault();
       $(".content-body-transplantation").slideDown(300);
   });

   $(".click-weed-management").click(function(e){
       e.preventDefault();
       $(".content-body-weed").slideDown(300);
   });

   $(".click-crop-one").click(function(e){
       e.preventDefault();
       $(".content-body-crop-one").slideDown(300);
   });

   $(".click-crop-two").click(function(e){
       e.preventDefault();
       $(".content-body-crop-two").slideDown(300);
   });

   $(".click-crop-three").click(function(e){
        e.preventDefault();
        $(".content-body-crop-three").slideDown(300);
   });

   $(".click-crop-four").click(function(e){
       e.preventDefault();
       $(".content-body-crop-four").slideDown(300);
   });

   $(".click-crop-five").click(function(e){
       e.preventDefault();
       $(".content-body-harvesting").slideDown(300);
   });

});



   $(document).ready(function(){
    
     $(document).on("scroll", onScroll);
      // Add smooth scrolling to all links
      // $("a").on('click', function(event) {

        // $(document).off("scroll");
      $(".side-navigation ul li a").on('click', function(event) {
       

        event.preventDefault();

        $(document).off("scroll");

         $('.side-navigation ul li a').each(function () {
            $(this).removeClass('active-seed');
             // $('.sec-content-body').slideDown("");

        })
        $(this).addClass('active-seed');

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: -70 + $(hash).offset().top
          }, 800, function(){
               // alert(hash);
               console.log($(hash).offset().top);

            // Add hash (#) to URL when done scrolling (default click behavior)
            // window.location.hash = hash;
            // alert(window.location.hash);
          });
        } // End if
      });
        
       var x = $('.pop-section-wrapper').height();
        $('.side-navigation').css({"height": +x+"px"});  

        function onScroll(event){
    var scrollPos = $(document).scrollTop();
    // alert(scrollPos);
    $('.side-navigation a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
                      // $(refElement).removeClass('stage-one');

        // alert(refElement);
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.side-navigation ul li a').removeClass("active-seed");
            currLink.addClass("active-seed");

                    // $(refElement).addClass('stage-one');
        }
        else{
                      // currLink.removeClass("active-seed");

        }
    });
}
    });




// js by HIRAJ==========================

  
  
  $('.my-btn').on('click', function(){
    $('#'+$(this).data('modal-similar')).css('display','block');
  })

  $('.close').on('click', function(){
    $('.modal-similar').hide();
  })

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target.className == 'modal-similar') {
      $('.modal-similar').hide();
    }
  }



// app js
$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

  $(".package-click").click(function(){
    $(".pop-section-wrapper").css('display','block');
    $(".pest-section-wrapper, .disease-section-wrapper").css('display', 'none');
    // $("#stageOne").addClass('stage-one');

    $(".package-click").addClass('active-tab').removeClass('active-dflt');
    $(".pest-click, .disease-click").removeClass('active-tab');  
  });

  $(".pest-click").click(function(){
    $(".pest-section-wrapper").css('display','block');
    $(".pop-section-wrapper, .disease-section-wrapper").css('display', 'none');
    
    $(".pest-click").addClass('active-tab');
    $(".package-click").removeClass('active-dflt');
    $(".package-click, .disease-click").removeClass('active-tab');
  });

  $(".disease-click").click(function(){
    $(".disease-section-wrapper").css('display','block');
    $(".pop-section-wrapper, .pest-section-wrapper").css('display', 'none');
    
    $(".disease-click").addClass('active-tab');
    $(".package-click, .pest-click").removeClass('active-tab');
    $(".package-click").removeClass('active-dflt');
  });

  $(".click-seed-var").click(function(){
    $(".side-navigation").slideToggle("slow");
  });




   $(".click-leaf-folder").click(function(){
    $(".leaf-folder-dtl").css("display", "block");
    $(".green-hopper-dtl, .stem-borer-dtl, .gall-midge-dtl, .case-worm-dtl, .brown-plant-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-green-hopper, .click-stem-borer, .click-gall-midge, .click-case-worm, .click-brown-plant").children(".direction-arrow").css("display", "none");
  });

  $(".click-green-hopper").click(function(){
    $(".green-hopper-dtl").css("display", "block");
    $(".leaf-folder-dtl, .stem-borer-dtl, .gall-midge-dtl, .case-worm-dtl, .brown-plant-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-leaf-folder, .click-stem-borer, .click-gall-midge, .click-case-worm, .click-brown-plant").children(".direction-arrow").css("display", "none");
  });

  $(".click-stem-borer").click(function(){
    $(".stem-borer-dtl").css("display", "block");
    $(".leaf-folder-dtl, .green-hopper-dtl, .gall-midge-dtl, .case-worm-dtl, .brown-plant-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-leaf-folder, .click-green-hopper, .click-gall-midge, .click-case-worm, .click-brown-plant").children(".direction-arrow").css("display", "none");
  });

  $(".click-gall-midge").click(function(){
    $(".gall-midge-dtl").css("display", "block");
    $(".leaf-folder-dtl, .green-hopper-dtl, .stem-borer-dtl, .case-worm-dtl, .brown-plant-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-leaf-folder, .click-green-hopper, .click-stem-borer, .click-case-worm, .click-brown-plant").children(".direction-arrow").css("display", "none");
  });

  $(".click-case-worm").click(function(){
    $(".case-worm-dtl").css("display", "block");
    $(".leaf-folder-dtl, .green-hopper-dtl, .stem-borer-dtl, .gall-midge-dtl, .brown-plant-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-leaf-folder, .click-green-hopper, .click-stem-borer, .click-gall-midge, .click-brown-plant").children(".direction-arrow").css("display", "none");
  });

  $(".click-brown-plant").click(function(){
    $(".brown-plant-dtl").css("display", "block");
    $(".leaf-folder-dtl, .green-hopper-dtl, .stem-borer-dtl, .gall-midge-dtl, .case-worm-dtl").css("display", "none");
    $(this).children(".direction-arrow").css("display", "block");
    $(".click-leaf-folder, .click-green-hopper, .click-stem-borer, .click-gall-midge, .click-case-worm").children(".direction-arrow").css("display", "none");
  });


  $(".close-best-pesticide, .pest-click, .disease-click").click(function(){
    $(".leaf-folder-dtl, .green-hopper-dtl, .stem-borer-dtl, .gall-midge-dtl, .case-worm-dtl, .brown-plant-dtl").css("display","none");
    $(".direction-arrow").css("display", "none");
  });



  $('.combo-single-product').click(function() {
    $(this).find('input[type=radio]').prop('checked', true);
  });

  $(".selected").prop( "checked", true );
});
 


$(function(){
        var stickyHeaderTop = $('.stage-hamburger').offset().top
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.stage-hamburger').addClass("stage-hamburger-add");
                       
                } else {
                      $('.stage-hamburger').removeClass("stage-hamburger-add");
            
                }
        });
  });


(function($) {

  'use strict';

  var $filters = $('.crop-filter [data-filter]'),
    $boxes = $('.crop-boxes [data-category]');

  $filters.on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    
    $filters.removeClass('selected');
    $this.addClass('selected');

    var $filterColor = $this.attr('data-filter');

    if ($filterColor == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.each(function(i) {
            $(this).addClass('is-animated').fadeIn();
          });
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.filter('[data-category = "' + $filterColor + '"]').each(function(i) {
            $(this).addClass('is-animated').fadeIn();
          });
        });
    }
  });

})(jQuery);



var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close-customise")[0];

btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




/*********Login-Sinup-hiraj************/
$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });

  /*login-signup toggle*/

  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })
});


$('.show-more').on('click', function() {
  $(this).siblings('.additional-content').slideToggle();
})




//hiraj js
var totalValues = function(box_object, box_id) {
    // console.log('data-item '+box_id)
    var sum = 0;

    //alert(box_object+ " cal " +box_id);


    $(box_object).find('.item_check:checked').each(function(){
        var val = parseInt($(this).siblings('label').find('.item_price').text());
        sum += val;
    })
    var n = $(box_object).find( ".item_check:checked" ).length;

    if($(box_object).find('.item_check').length > 1){

        if(n === 0){
            $(box_object).find('.combo-product-total-wrap').addClass('disabledbutton');
        }else{
            $(box_object).find('.combo-product-total-wrap').removeClass('disabledbutton');
        }
    }else{
        $(box_object).find('.item_check').hide(); //if only one item
        $(box_object).off('click').find('.product-wrap').css('pointer-events','none'); //if only one item
    }

    $(box_object).find( ".total_item" ).text( n + (n === 1 || n === 0 ? " item" : " items") );

    $(box_object).find('.total_amt').text(sum);

};

//$( "input[type=checkbox]" ).on( "click", totalValues );

$('.combo-product-wrap').each(function(){
    let box_id = $(this).attr('data-item');
    let box_object = $(this);

    totalValues(box_object, box_id);
})


$('.combo-product-wrap').on('click', function(){
    let box_id = $(this).attr('data-item');
    let box_object = $(this);
    totalValues(box_object, box_id);
})


   //similar products hiraj

    $('.similar-products-wrap span').on('click', function(){
        var this_block = $(this);
        var similar_productId = $(this).attr('data-pid');
        var data_link = $(this).attr('data-link');
        //alert(this_block);
        //alert("hi");

        var clicked_item = $(this).parents('.product-combo').find('.product_name').text();

        $('.similar-heading span').text(clicked_item);


        var random_num = 0;

        $.ajax({
            url:'data/paddy/'+data_link+'.json',
            dataType:'json',
            type:'GET',
            success: function(data){
                //alert("success");

                //alert(similar_productId);

                Array.prototype.getIndexOf = function(el) {

                    var arr = this;

                    for (var i=0; i<arr.length; i++){
                        console.log(arr[i].id);
                        if(arr[i].id==el){
                            return i;
                        }
                    }
                    //return -1;
                }

                var array_Index = data.getIndexOf(similar_productId);

                data.splice(array_Index, 1);

                console.log(data);

                $.map(data, function(val, key) {
                    //var mark_up = "<span>"+ val.price +"</span>";

                    var mark_up =

                        '<div class="close-similar-prd">'+
                            '<span class="close-sim"></span>'+
                            '<span class="close-sim"></span>'+
                        '</div>'+
                        '<div class="combos-outwer" data-pid='+val.id+'>'+
                        '<div class="product-combo-wrap">'+
                        '<div class="product-combo">'+
                        '<div class="outwer-product-wrap">'+
                        '<input class="select-prod" type="radio" name="similarRd" id="radioUnChecked-'+random_num+'">'+
                        '<label for="radioUnChecked-'+random_num+'">'+
                        '<div class="product-wrap">'+
                        '<div class="product-details-wrap">'+
                        '<div class="product-img">'+
                        '<div class="inner-prd-img">'+
                        '<img src='+val.images[0].medium+'>'+
                        '</div>'+
                        '</div>'+
                        '<div class="product-dtl">'+
                        '<span class="product_name">'+val.brand+'<span> '+val.title+'</span></span>'+
                        '<span class="qnt">'+val.packaging[0]+'</span>/'+
                    '<span class="price">'+val.price+'</span>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</label>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>';

                    random_num++;

                    //$('.similar-heading span').find('.product_name').text('hi');

                    $(this_block).parents('.product-combo-wrap').find('.similar-prd-click-wrap').show();
                    $(this_block).parents('.product-combo-wrap').find('.related-products').append(mark_up);
                    //alert("similar is "+$(this_block).find('.similar').text());
                    //alert(this_block);
                    //alert(val.price);

                });

                //$('body').css('opacity','0.5');
                var current = $(window).scrollTop();
                $(window).scroll(function() {
                    $(window).scrollTop(current);
                });

                $(this_block).parents('.product-combo').css({'opacity':'0.5', 'pointer-events':'none'});

                        //alert(data[0].price);

            },
            error: function(data){
                console.log(data);
                alert('failed');

            }

        });
        //ajax-call-ends
        //$(this_block).parents('.product-combo').css({'opacity':'0.5', 'pointer-events':'none'});
        //$(this_block).parents('.product-combo-wrap').find('.similar-prd-click-wrap').show();
    });


   


   $(document).on('click', '.outwer-product-wrap .select-prod', function(){
       //alert('clicked')

       var product_id = $(this).parents('.combos-outwer').attr('data-pid');
       //alert(product_id);
       var product_image = $(this).parent('.outwer-product-wrap').find('.inner-prd-img img').attr('src');
       //alert(product_image);
       var product_name = $(this).parent('.outwer-product-wrap').find('.product_name').text();
       var qnt = $(this).parent('.outwer-product-wrap').find('.qnt').text();
       var price = $(this).parent('.outwer-product-wrap').find('.price').text();
       //console.log(product_image);


       var tag_clicked = $(this);
       var load_spinner = '<div class="load_spinner"><img src="img/loading_apple.gif"> Updating your choice...</div>';
       $(tag_clicked).parents('.related-products').append(load_spinner);

       //$(this).parents('.product-combo-wrap').attr('data-item');
       //similar-products-wrap

       $(this).parents('.main_view_item').children('.product-combo').find('.similar-products-wrap').find('span').attr('data-pid', product_id);

       $(this).parents('.main_view_item').children('.product-combo').find('.inner-prd-img').find('img').attr('src', product_image);

       $(this).parents('.main_view_item').children('.product-combo').find('.product_name').text(product_name);

       $(this).parents('.main_view_item').children('.product-combo').find('.qnt').text(qnt);

       $(this).parents('.main_view_item').children('.product-combo').find('.item_price').text(price);

       $(this).parents('.main_view_item').children('.product-combo').find('.item_check').prop('checked', true);


       var box_id = $(this).parents('.combo-product-wrap').attr('data-item');
       var box_object = $(this).parents('.combo-product-wrap');

       setTimeout(function(){

           totalValues(box_object, box_id);
           closeModal(tag_clicked);

       }, 2000);

       //alert(tag_clicked);

   });

   $(document).on('click', '.close-similar-prd', function(){

       var tag_clicked = $(this);
       //alert(tag_clicked);
       closeModal(tag_clicked);
   });

   //to close modal
   function closeModal(tag_clicked){

       //$(tag_clicked).parents('.modal-wrap').css('background-color','#ccc')
       $(tag_clicked).parents('.product-combo-wrap').find('.product-combo').css({'opacity':'1', 'pointer-events':'visible'});
       $(tag_clicked).parents('.similar-prd-click-wrap' ).fadeOut();
       $(tag_clicked).parents('.related-products').empty();

       $(window).off('scroll');

   }









// var totalValues = function(box_object, box_id) {
//     console.log('data-item '+box_id)
//     var sum = 0;
    
    
//     $(box_object).find('.item_check:checked').each(function(){
//         var val = parseInt($(this).siblings('label').find('.item_price').text());
//         sum += val;
//     })
//     var n = $(box_object).find( ".item_check:checked" ).length;
    
//     if($(box_object).find('.item_check').length > 1){

//         if(n === 0){
//             $(box_object).find('.combo-product-total-wrap').addClass('disabledbutton');
//         }else{
//             $(box_object).find('.combo-product-total-wrap').removeClass('disabledbutton');
//         }
//     }else{
//         $(box_object).find('.item_check').hide(); //if only one item
//         $(box_object).off('click').find('.product-wrap').css('pointer-events','none'); //if only one item
//     }

//     $(box_object).find( ".total_item" ).text( n + (n === 1 || n === 0 ? " item" : " items") );

//     $(box_object).find('.total_amt').text(sum);
    
// };
    
    
// //$( "input[type=checkbox]" ).on( "click", totalValues );

// $('.combo-product-wrap').each(function(){
//     let box_id = $(this).attr('data-item');
//     let box_object = $(this);
    
//     totalValues(box_object, box_id);
// })


// $('.combo-product-wrap').on('click', function(){
//     let box_id = $(this).attr('data-item');
//     let box_object = $(this);
//     totalValues(box_object, box_id);
// })








  // $('.similar-products-wrap span').on('click', function() {
  //   $(this).siblings('.similar-arow, .similar-arow-rgt').show();

  // });

  // $('.similar-lft-click-one span').click(function() {
  //     $("#Similar_left_1").css("display", "block");
  //     $("#Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_10, #Similar_left_11").css("display", "none");
  //     $(".similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();

  // });
  // $(".close-sim, .close-similar-prd").click(function() {
  //   $(".similar-arow, .similar-prd-left").hide();
  // });


  // $('.similar-rgt-click-one span').on('click', function() {
  //   $("#Similar_right_1").show();
  //   $("#Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //   $(".similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();

  // });
  // $(".close-sim, .close-similar-prd").click(function() {
  //   $(".similar-arow-rgt, .similar-prd-right").hide();
  // });


  // $('.similar-single-click-one span').on('click', function() {
  //   $("#Similar_single_1").show();
  //   $("#Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".close-sim, .close-similar-prd").click(function() {
  //   $(".similar-arow, .similar-prd-click-single-wrap").hide();
  //   $(".duration-apply").css("display", "block");
  // });



  // $(".similar-lft-click-two span").click(function(){
  //   $("#Similar_left_2").show();
  //   $("#Similar_left_1, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10").hide();
  //     $(".similar-arow-1, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9").hide();
  // }); 
  // $(".similar-lft-click-3 span").click(function(){
  //   $("#Similar_left_3").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  // $(".similar-lft-click-4 span").click(function(){
  //   $("#Similar_left_4").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  // $(".similar-lft-click-5 span").click(function(){
  //   $("#Similar_left_5").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  // $(".similar-lft-click-6 span").click(function(){
  //   $("#Similar_left_6").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  //  $(".similar-lft-click-7 span").click(function(){
  //   $("#Similar_left_7").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_8, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  //  $(".similar-lft-click-8 span").click(function(){
  //   $("#Similar_left_8").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_9, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-9, .similar-arow-10, .similar-arow-11").hide();
  // });
  
  // $(".similar-lft-click-9 span").click(function(){
  //   $("#Similar_left_9").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_10, #Similar_left_11").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arwo-10, .similar-arow-11").hide();
  // });
  // $(".similar-lft-click-10 span").click(function(){
  //   $("#Similar_left_10").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_11").hide();
  //   $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-11").hide();
  // });
  // $(".similar-lft-click-11 span").click(function(){
  //   $("#Similar_left_11").show();
  //   $("#Similar_left_1, #Similar_left_2, #Similar_left_3, #Similar_left_4, #Similar_left_5, #Similar_left_6, #Similar_left_7, #Similar_left_8, #Similar_left_9, #Similar_left_10").hide();
  //   $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });



  // $(".similar-rgt-click-2 span").click(function(){
  //   $("#Similar_right_2").show();
  //   $("#Similar_right_1, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-3 span").click(function(){
  //   $("#Similar_right_3").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-4 span").click(function(){
  //   $("#Similar_right_4").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9").hide();
  // });
  // $(".similar-rgt-click-5 span").click(function(){
  //   $("#Similar_right_5").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-6 span").click(function(){
  //   $("#Similar_right_6").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_7, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-7 span").click(function(){
  //   $("#Similar_right_7").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_8, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-8, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-8 span").click(function(){
  //   $("#Similar_right_8").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_9, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-9, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-9 span").click(function(){
  //   $("#Similar_right_9").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_10").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-10").hide();
  // });
  // $(".similar-rgt-click-10 span").click(function(){
  //   $("#Similar_right_10").show();
  //   $("#Similar_right_1, #Similar_right_2, #Similar_right_3, #Similar_right_4, #Similar_right_5, #Similar_right_6, #Similar_right_7, #Similar_right_8, #Similar_right_9").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9").hide();
  // });



  // $(".similar-single-click-2 span").click(function(){
  //   $("#Similar_single_2").show();
  //   $("#Similar_single_1, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
  // });
  // $(".similar-single-click-3 span").click(function(){
  //   $("#Similar_single_3").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
    
  // });
  // $(".similar-single-click-4 span").click(function(){
  //   $("#Similar_single_4").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
  
  // }); 
  // $(".similar-single-click-5 span").click(function(){
  //   $("#Similar_single_5").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
  
  // });
  // $(".similar-single-click-6 span").click(function(){
  //   $("#Similar_single_6").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-7 span").click(function(){
  //   $("#Similar_single_7").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
    
  // });
  // $(".similar-single-click-8 span").click(function(){
  //   $("#Similar_single_8").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-9 span").click(function(){
  //   $("#Similar_single_9").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-10 span").click(function(){
  //   $("#Similar_single_10").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-11 span").click(function(){
  //   $("#Similar_single_11").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-12 span").click(function(){
  //   $("#Similar_single_12").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-13 span").click(function(){
  //   $("#Similar_single_13").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-14 span").click(function(){
  //   $("#Similar_single_14").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-15 span").click(function(){
  //   $("#Similar_single_15").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-16 span").click(function(){
  //   $("#Similar_single_16").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, , #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-17 span").click(function(){
  //   $("#Similar_single_17").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-18 span").click(function(){
  //   $("#Similar_single_18").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-19 span").click(function(){
  //   $("#Similar_single_19").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-20 span").click(function(){
  //   $("#Similar_single_20").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-21 span").click(function(){
  //   $("#Similar_single_21").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-22 span").click(function(){
  //   $("#Similar_single_22").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-23 span").click(function(){
  //   $("#Similar_single_23").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-24 span").click(function(){
  //   $("#Similar_single_24").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-25 span").click(function(){
  //   $("#Similar_single_25").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-26 span").click(function(){
  //   $("#Similar_single_26").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_27, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-27, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-27 span").click(function(){
  //   $("#Similar_single_27").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_28, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-28, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");

  // });
  // $(".similar-single-click-28 span").click(function(){
  //   $("#Similar_single_28").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_29, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-29, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
  // });
  // $(".similar-single-click-29 span").click(function(){
  //   $("#Similar_single_29").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_30").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-30").hide();
  //   $(".duration-apply").css("display", "none");
  // });
  // $(".similar-single-click-30 span").click(function(){
  //   $("#Similar_single_30").show();
  //   $("#Similar_single_1, #Similar_single_2, #Similar_single_3, #Similar_single_4, #Similar_single_5, #Similar_single_6, #Similar_single_7, #Similar_single_8, #Similar_single_9, #Similar_single_10, #Similar_single_11, #Similar_single_12, #Similar_single_13, #Similar_single_14, #Similar_single_15, #Similar_single_16, #Similar_single_17, #Similar_single_18, #Similar_single_19, #Similar_single_20, #Similar_single_21, #Similar_single_22, #Similar_single_23, #Similar_single_24, #Similar_single_25, #Similar_single_26, #Similar_single_27, #Similar_single_28, #Similar_single_29").hide();
  //     $(".similar-arow-1, .similar-arow-2, .similar-arow-3, .similar-arow-4, .similar-arow-5, .similar-arow-6, .similar-arow-7, .similar-arow-8, .similar-arow-9, .similar-arow-10, .similar-arow-11, .similar-arow-12, .similar-arow-13, .similar-arow-14, .similar-arow-15, .similar-arow-16, .similar-arow-17, .similar-arow-18, .similar-arow-19, .similar-arow-20, .similar-arow-21, .similar-arow-22, .similar-arow-23, .similar-arow-24, .similar-arow-25, .similar-arow-26, .similar-arow-27, .similar-arow-28, .similar-arow-29").hide();
  //   $(".duration-apply").css("display", "none");
  // });







