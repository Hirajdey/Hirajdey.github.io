
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
