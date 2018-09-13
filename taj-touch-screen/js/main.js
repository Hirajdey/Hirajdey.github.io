
$(document).ready(function(){

    $('.categori-items-box').owlCarousel({
        loop:false,
        margin:10,
        responsive:{
            0:{
                items:3,
                nav:true
            }
        }
    });

     $('.menu-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1,
                nav:true
            }
        }
    });
    
    $('.gallery-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsive:{
                0:{
                    items:1,
                    nav:true
                }
            }
        });

  

  (function(){

    var $playBtn = $('.play-btn');
    var $watchVideo = $('.watch-video');
    var $close = $('.close');
      
      $playBtn.click(function(){
        $watchVideo.css({display:'block'});
      });
      $close.click(function(){
        $(this).parent().css({display:'none'});
      });

  })();

  (function(){

    var $explore = $('.explore-box');
    var $featureSec = $('#feature_sec');
      
      $explore.click(function(){
        $featureSec.css({display:'block'});
      });

  })();


  (function(){
    var $iconHome = $('.icon-home');
    var $homePage = $('.taj-home-sec');

      $iconHome.click(function(){
        // alert('yes');
        $homePage.siblings().css({display:'none'});
        $homePage.css({display:'block'});

      });
  })();


  (function(){

    var $featuresItem = $('.fut-item');
    var $targetFutItem = $('.fut_trgt_cat');

      $featuresItem.each(function(){

        $(this).click(function(){
          var $thisAttr = $(this).attr('filter-categori');
          // alert($thisAttr);

            $targetFutItem.each(function(){
              var $futTrgtAttr = $(this).attr('target-categori');
              // alert($futTrgtAttr);

              if ($thisAttr == $futTrgtAttr) {
                // alert($(this).text());
                $(this).css({display:'inline-block'});

              }

            });
        });
      });

  })();


  (function(){

    // var $previousBtn = $('.icon-back-arrow');
    // var $nextBtn = $('.icon-next-arrow');
   

    // $previousBtn.click(function(){

    //   $(this).parent().parent().prev().show('slow', function(){
    //     $(this).parent().parent().next().hide('');
    //   });

    // });

    // $nextBtn.click(function(){

    //   $(this).parent().parent().next().show('slow', function(){
    //     $(this).parent().parent().prev().hide('');

    //   });
    // });




    var $previousBtn = $('.icon-back-arrow');
    var $nextBtn = $('.icon-next-arrow');
       
    $previousBtn.click(function(){
      $(this).parent().parent().prev().css({display:'block'});
      $(this).parent().parent().css({display:"none"});

    });

    $nextBtn.click(function(){
      $(this).parent().parent().next().css({display:'block'});
      // $(this).parent().parent().css({display:'none'});

    });

    var $targetFutItem = $('.fut_trgt_cat');

      $targetFutItem.each(function(){

        var $lastItem = $(this).find('.item-details').last().find('.icon-next-arrow'); 
          
          $lastItem.click(function(){        

            $('.item-details').css({display:'none'});

          });

          var $thisLast = $('.icon-next-arrow.last_feature');

          $thisLast.click(function(){

            $('.fut_trgt_cat').css({display:'none'});

          });

      });


    // setTimeout(function(){

     //    $nextBtn.click(function(){
     //      $(this).parent().parent().css({display:'none'});
     //    },5000);

     //  });

  })();


  (function(){

    var $categoriItems = $('.categori-item');
    var $catItemDetails = $('.item-details');

    $categoriItems.each(function(){
      // alert($(this).text());
      $(this).click(function(){
        var $thisAttr = $(this).attr('filter-item-dtl');
        // alert($thisAttr);
        $catItemDetails.each(function(){
          var $itemDtlAttr = $(this).attr('target-item-dtl');
          // alert($itemDtlAttr);
          if($thisAttr == $itemDtlAttr){
            $(this).css({display:'block'});            
          }

        });

      });

    });

  })();


  (function(){
    
    var $tajVideo = $('#tajVideo');
    var $play = $('#playVideo');
    var $stop = $('#stopVideo');

      $play.click(function(){
        $tajVideo[0].play();
      });

      $stop.click(function(){
        $tajVideo[0].pause();
      });

  })();


  (function(){

    $("#slideshow > div:gt(0)").hide();

      setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(5000)
        .next()
        .fadeIn(5000)
        .end()
        .appendTo('#slideshow');
      }, 6000);

  })();

  (function(){

    $("#slideshowDining > div:gt(0)").hide();

      setInterval(function() {
      $('#slideshowDining > div:first')
        .fadeOut(5000)
        .next()
        .fadeIn(5000)
        .end()
        .appendTo('#slideshowDining');
      }, 6000);

  })();

  (function(){

    $("#slideshowExperience > div:gt(0)").hide();

      setInterval(function() {
      $('#slideshowExperience > div:first')
        .fadeOut(5000)
        .next()
        .fadeIn(5000)
        .end()
        .appendTo('#slideshowExperience');
      }, 6000);

  })();

  (function(){

    $("#slideshowJivaSpa > div:gt(0)").hide();

      setInterval(function() {
      $('#slideshowJivaSpa > div:first')
        .fadeOut(5000)
        .next()
        .fadeIn(5000)
        .end()
        .appendTo('#slideshowJivaSpa');
      }, 6000);

  })();

  (function(){

      $("#slideshowSightseeing > div:gt(0)").hide();

        setInterval(function() {
        $('#slideshowSightseeing > div:first')
          .fadeOut(5000)
          .next()
          .fadeIn(5000)
          .end()
          .appendTo('#slideshowSightseeing');
        }, 6000);

    })();


  (function(){

    var $menuBtn = $('.menu-btn');
    var $dishesBtn = $('.dishes-btn');

      $menuBtn.click(function(){
        $(this).parent().parent().siblings('.menu-details').css({display:'block'});
      });

      $dishesBtn.click(function(){
        $(this).parent().parent().siblings('.dishes-details').css({display:'block'});
      });

  })();



(function(){

  var $dishesCategori = $('.dishes-categori');
  var $dishesCatDtl = $('.dishes-categori-details');

    $dishesCategori.each(function(){

      $(this).click(function(){

         var $thisAttr = $(this).attr('dishes-filter');
         // alert($thisAttr);
         $dishesCatDtl.each(function(){
          var $dishesDtlAttr = $(this).attr('target-dishes-dtl');
          // alert($dishesDtlAttr);

          if($thisAttr == $dishesDtlAttr){

            $(this).css({display:"block"});

          } 

         });

      });

    });

          var $thisLast = $('.last_dishes-cat-dtl');
            $thisLast.click(function(){
              $dishesCatDtl.css({display:'none'});
              // alert('yes');
          });

          var $lastHighTea = $('.last_highTea');
            $lastHighTea.click(function(){
              $(this).parent().parent().css({display:'none'});
            });      
  
  })();


  (function(){

    var $galleryBtn = $('#gallery_btn');
    var $galleryBox = $('#gallery_box');

      $galleryBtn.click(function(){
        $galleryBox.css({display:'block'});

      });

  })();

  // (function(){
  //   var guestPhotos = $('.esteemed-guest-details').last().find('.icon-next-arrow');
  //   // alert(guestPhotos.text());
  //     guestPhotos.click(function(){
  //       $(this).parent().parent().css({display:"none"});
  //     }); 

  // })();

  (function(){

    var $guestPreviousBtn = $('.esteemed-guest-details .icon-back-arrow');
    var $guestNextBtn = $('.esteemed-guest-details .icon-next-arrow');
       
    $guestPreviousBtn.click(function(){
      $(this).parent().parent().prev().css({display:'block'});
      $(this).parent().parent().css({display:"none"});

    });

    $guestNextBtn.click(function(){
      $(this).parent().parent().next().css({display:'block'});
      $(this).parent().parent().css({display:'none'});

    });

  })();


  (function(){

    var $jivaspaDetails = $('.jivaspa-dtl').last().find('.icon-next-arrow');
    var $sightseeingDetails = $('.sightseeing-dtl').last().find('.icon-next-arrow');

        $jivaspaDetails.click(function(){
          $('.jivaspa-dtl').css({display:"none"});
        });
        $sightseeingDetails.click(function(){
          $('.sightseeing-dtl').css({display:"none"});
        });

  })();

});















