

// var module = document.getElementById("clampjs");
// $clamp(module, {clamp: 1});

$(document).ready(function() {


  (function($){

  // $("#applyBtn").click(function(){
  //     $('.loadpage').load("applyjob.html #applyForm", function(responseTxt, statusTxt, xhr){
  //         if(statusTxt == "success")
  //             alert("External content loaded successfully!");
  //         if(statusTxt == "error")
  //             alert("Error: " + xhr.status + ": " + xhr.statusText);
  //     });
  // }); 

    $('.applyBtn').click(function () { 

        $.ajax({
            // context: this,
            dataType : "html",
            url : "applyjob.html",
            success : function(applydata) {
                $('.loadpage').html(applydata);
            }
        });

        $('.loadpage').addClass('addloadpage');
    });

    $('.closed').click(function(){
        $('.loadpage').html('');
        $('.loadpage').removeClass('addloadpage');
    });

  })(jQuery);
    

    
  (function($) {

    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        mouseDrag: false,
        animateOut: true,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:8
            }
        }
    })

  })(jQuery);



  $('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

  });

  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });


  (function($){

    var clickClosed = $('#closed');

      clickClosed.click(function(){
        $(this).parents('#rgtBox').css({
          display:"none",
        });
        $('#lftBox').addClass("addJobCartWrap");
        $('.job-cart-row').addClass("addJobCartCol");
      });

  })(jQuery);


  (function($){

    $('.job-cart-col').slice(0, 6).show();

    $('.load-more').click(function(){
      $('.job-cart-col:hidden').slice(0, 3).slideDown();

      $('body,html').animate({
        scrollTop: $(this).offset().top
      }, 1500);

    });

  })(jQuery);


  
  (function($) {
    var $filters = $('.active [data-filter]'),
      $boxes = $('.job-cart-row [data-category]');

    $filters.on('click', function(e) {
      e.preventDefault();
      var $this = $(this);
      
      $filters.removeClass('active');
      $this.addClass('active');

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


  (function($){
    var formControl = $('.form-control input');   

      formControl.focusin(function(){
        $(this).siblings().css({
          "width":"100%",
        });
      });

      formControl.focusout(function(){
        $(this).siblings().css({
          "width":"0px",
        });
        if($(this).val() == ''){
          $(this).parent().css({
            "border-color":"red",
          });
        }
        else{
         $(this).parent().css({
            "border-color":"#0e82a9",
          }); 
        }

      });

  })(jQuery);


  (function($){

    var regExp = $('.form-control input[name=fullname]');
    var regName = /[^a-z A-Z]/g;
      regExp.keyup(function(){
        if ($(this).val().match(regName)){
            $(this).val($(this).val().replace(regName, ''));
        }
      });

  })(jQuery);

  (function($){
    var regExp = $('.form-control input[name=mobile]');
    var regMob = /[^0-9]/g;

      regExp.keyup(function(){
        if($(this).val().match(regMob)){
          $(this).val($(this).val().replace(regMob, ''));
        }

      });

      regExp.keyup(function(stop){
        var mobVal = $(this).val();     
        if($(this).val().length >= 11){
          $(this).val($(this).val().replace(mobVal, ''));
          // stop.preventDefault();
        }
      });

       regExp.focusout(function(){
        var mobVal = $(this).val();
        if($(this).val().length < 10){
          $(this).val($(this).val().replace(mobVal,''))
          $(this).parent().css({
            "border-color":"red",
          });
        }
      });

  })(jQuery);


  (function($){
    var regExp = $('.form-control input[name=email]');
      regExp.focusout(function(){
        var emlVal = $(this).val();

        if (!($(this).val().match(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i))){
          $(this).val($(this).val().replace(emlVal,''));
          $(this).parent().css({
            "border-color":"red",
          })
        }
      });

  })(jQuery);

  
  (function($){

    var radioExp = $('.exper-col input[id=experience]');
    var radioFre = $('.exper-col input[id=fresher]');

      radioExp.click(function(){ 
        if($(this).attr('id') == 'experience'){
          $('#qNumber').css({
            "display":"inline-block",
          }); 
        }
      });

      radioFre.click(function(){
        if($(this).attr('id') !== 'experience'){
          $('#qNumber').css({
            "display":"none",
          }); 
        }
      });

  })(jQuery);


  (function($){

    var allApplyRadio = $('.exper-col input[type=radio]');

      allApplyRadio.click(function(){
        if ($(this).is(':checked')) {
          $(allApplyRadio).siblings().css({
                "color":"#999999",
          });
        }

      });
 
  })(jQuery);

  (function($){

    var uploadResumee = $('.resume-upload input[type=file]');
    var uploadVal = $('.resume-upload input[type=file]').val();

      uploadResumee.click(function(){
        if (uploadVal.length >= 0) {
          $(this).siblings().css({
            "color":"#999999",
          });
        }
      });

  })(jQuery);
  

  (function($){

    var applyFormData = $('.submit-btn input[name=apply-form]');
    var experienceNumber = $('.exper-col input[type=number]');

      applyFormData.click(function(){
        var  fullNameVl= $('.form-control input[name=fullname]');
        var  mobileVl= $('.form-control input[name=mobile]');
        var  emailVl= $('.form-control input[name=email]');
        var uploadResume = $('.resume-upload input[type=file]');
        var allRadioVal = $('.exper-col input[type=radio]:checked');
      
          if(fullNameVl.val() == '' && mobileVl.val() == '' && emailVl.val() == '' && experienceNumber.val() <= 0 && uploadResume.val() == '' && allRadioVal.val() == undefined){
              fullNameVl.parent().css({
                "border-color":"red",
                  }); 
              mobileVl.parent().css({
                    "border-color":"red",
                  });
              emailVl.parent().css({
                    "border-color":"red",
                  });
              experienceNumber.css({
                    "border-color":"red",
              });
              uploadResume.siblings().css({
                    "color":"red",
              }); 
               $('.exper-col input[type=radio]').siblings().css({
                    "color":"red",
              });
          } 

          else{
            $.post("contact_form.php",{

              // some data 

            }, function(data){
              $('#someid').append(data);

            });
            alert("link your contact_form.php file");
          }
      });


      var $numberIncrease = $('.quantity-up');
      var $numberDecrease = $('.quantity-down');

      $numberIncrease.click(function(){
        $(this).each(function(){
            if (experienceNumber.val() >= 1) {
            experienceNumber.css({
              "border-color":"#999999",
            });
          }
        });
        
      });

      $numberDecrease.click(function(){
        $(this).each(function(){
            if (experienceNumber.val() <= 0) {
            experienceNumber.css({
              "border-color":"red",
            });
          }  
        });
        
      });     

  })(jQuery);


  // start post a job form

  (function($){
  
    var $submitFormData = [
    $('.form-submit input[name=formsave]'), 
    $('input[title=text-box],textarea[title=text-box]'), 
    $('select[title=select-box]'), 
    $('input[title=numberVal]'), 
    $('input[title=empTypeVal]')];

   // $submitFormData[0].css({"pointer-events":"none","opacity":"0.5"});

      $submitFormData[0].click(function(){
            // console.log("yes");
        $submitFormData[1].each(function(){
          if ($(this).val() == ''){
            $(this).parent().css({
              "border-color":"red",
            });
            // $submitFormData[0].css({"pointer-events":"none","opacity":"0.5"});
          }
          // else{
          //   $submitFormData[0].css({"pointer-events":"visible","opacity":"1"});
          // }
        });

        $submitFormData[2].each(function(){
          if ($(this).val() == ''){
            $(this).parents('.select-style, .monthly').css({
              "border-color":"red",
            });
          }

        });

        $submitFormData[3].each(function(){
          if($(this).val() <= 0){
            $(this).css({
              "border-color":"red",
            });
          }

        });
       
        // $submitFormData[4].each(function(){
        //   if ($(this).is(':checked')){
        //     alert("yes");
        //   }
        //   else{
        //     alert("no");
        //   }
        // });

        var empType = $('input[title=empTypeVal]');

            if(!(empType.is(':checked'))){

                empType.parents('.input-control').css({
                    "border-color":"red",
                }); 
            }

      });


      $submitFormData[4].click(function(){
        if($(this).is(':checked')){
          $(this).parents('.input-control').css({
            "border-color":"#e6e6e6",
          });
        }
      }); 

      var $selectStyle = $('.select-styled'); 

      $selectStyle.click(function(){
          $(this).parents('.select-style,.monthly').css({
              "border-color":"#e6e6e6",
          });        
      });

      $submitFormData[1].focusin(function(){
        $(this).parent().css({
          "border-color":"#0e82a9",
        });

      });

      $submitFormData[1].focusout(function(){
        if ($(this).val() == '') {
          $(this).parent().css({
            "border-color":"red",
          });  
        }
        else{
          $(this).parent().css({
            "border-color":"#e6e6e6",
          });
        }

      });


      // var $salaryFormTo = $('input[name=form-to');
      //   $salaryFormTo.keyup(function(){
      //     var regMob = /[^0-9]/g;

      //     if ($(this).val().match(regMob)) {
      //       $(this).val($(this).val().replace(regMob, ''));
      //     }

      //   });

  })(jQuery);


  (function($){

    var $optionVal = $('.select-options li');

      $optionVal.click(function(){

        var $skillSet = $('.skill-set').find('div');
        var $thisVal = $(this).attr('rel')

          $skillSet.each(function(){

            var $userSkill =  $(this).attr('skill');

            if ($thisVal == $userSkill) {

              $(this).css({
                "display":"inline-block",
              });
            }else{
              $(this).css({
                "display":"none",
              });
            }

          });
      });

  })(jQuery);


});//documentready










