
//scroll to top btn
$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() !== 0) {
      $('#scroll-top').removeClass("hide");
      $('#scroll-top').addClass("show");
    } else {
      $('#scroll-top').removeClass("show");
      $('#scroll-top').addClass("hide");
    }
  });

  //Click event to scroll to top
  $('#scroll-top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

});

//mobile drop down menu
$(function () {
  $('#mobile-menu').click(function (e) {
    e.preventDefault();
    $('#mobile-navigation').slideToggle();
  });
});

$(function () {
  $(".left-arrw").click(function(){
    $(".ul-wrapper").addClass("m-scroll");
  });
  $(".right-arrw").click(function(){
    $(".ul-wrapper").removeClass("m-scroll");
  });
});
$(function () {
  $(".next-arrw").click(function(){
    $(".key-block ").addClass("m-scroll");
  });
  $(".prev-arrw").click(function(){
    $(".key-block ").removeClass("m-scroll");
  });
});
$(function () {
  $(".next-arrw").click(function(){
    $(".key-block ").addClass("m-scroll");
    $(".key-sect").addClass("arrow");
  });
  $(".prev-arrw").click(function(){
    $(".key-block ").removeClass("m-scroll");
    $(".key-sect").removeClass("arrow");
  });
});
$(function () {
  $(".next-arrw1").click(function(){
    $(".fold-wrapper").addClass("m-scroll");
    $(".fold-sect").addClass("arrow");
  });
  $(".prev-arrw1").click(function(){
    $(".fold-wrapper").removeClass("m-scroll");
    $(".fold-sect").removeClass("arrow");
  });
});
// $(document).ready(function() {
//     $(".prev-arrw1").css("display","none");
//     $(".next-arrw1").click(function(){
//         $(".vac-section").css("display","none");
//         $(".tumor-section").css("display","block");
//         $(".prev-arrw1").css("display","block");
//         $(".next-arrw1").css("display","none");
//     });
//     $(".prev-arrw1").click(function(){
//         $(".vac-section").css("display","block");
//         $(".tumor-section").css("display","none");
//         $(".prev-arrw1").css("display","none");
//         $(".next-arrw1").css("display","block");
//     });
// });
// $(document).ready(function() {
//     $(".prev-arrw").css("display","none");
//     $(".next-arrw").click(function(){
//         $(".pept-cnt-block").css("display","none");
//         $(".advantage-block").css("display","block");
//         $(".prev-arrw").css("display","block");
//         $(".next-arrw").css("display","none");
//     });
//     $(".prev-arrw").click(function(){
//         $(".pept-cnt-block").css("display","block");
//         $(".advantage-block").css("display","none");
//         $(".prev-arrw").css("display","none");
//         $(".next-arrw").css("display","block");
//     });
// });
