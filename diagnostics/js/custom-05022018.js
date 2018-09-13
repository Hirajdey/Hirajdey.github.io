
$( function() {
	$( ".homeTab" ).tabs();
} );

var val;
$(document).ready(function() {
	$('.inputField input').focus(function () {
	    $(this).parent().addClass('active');
	    $(this).siblings('p').hide();
	    val = $(this).val();
	    $(this).val('');
	});
	$('.inputField input').blur(function () {
	    $(this).parent().removeClass('active');
	    var bla = $(this).val();
	    if ( bla == ""){
	    	$(this).siblings('p').show();
	    	$(this).val(val);
	    }
	});
	$('.inputField input.hasDropDown').focus(function () {
		$(this).siblings(".dropDown").slideDown('fast');
	});
	$('.inputField input').blur(function () {
	    $(this).siblings(".dropDown").slideUp('fast');
	});

	$('.homeTab.otherPage.common .wrapper ul li').removeClass("ui-tabs-active");
	$('.homeTab.otherPage.ngsServices .wrapper ul li').removeClass("ui-tabs-active");
	$('.homeTab.otherPage.ngsServices .wrapper ul li.tab2').addClass("ui-tabs-active");
	$('.homeTab.otherPage.common .wrapper #tabs-1').hide();
	$('.homeTab.otherPage .wrapper #tabs-1').hide();
	$(".headerMenu li a").mouseenter(function(){
 
        // Get the current title
        var title = $(this).attr("title");
 
        // Store it in a temporary attribute
        $(this).attr("tmp_title", title);
 
        // Set the title to nothing so we don't see the tooltips
        $(this).attr("title","");
         
    });
 
  $(".headerMenu li a").mouseleave(function(){// Fired when we leave the element
 
        // Retrieve the title from the temporary attribute
        var title = $(this).attr("tmp_title");
 
        // Return the title to what it was
        $(this).attr("title", title);
         
    });
  $('.header .mobileMenu').off('click').on('click', function(){
		$(this).siblings(".dropDown").slideToggle('fast');
	});

	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

	 // $('.inputField input').onfocus="if(this.value == 'Inquiry/Message')this.value=''" onblur="if(this.value == '')this.value='Inquiry/Message'">
        
// diagnostics Script Starts

	$(".diganosticsInnerContent .heading").off('click').on('click',function(){
		$(this).siblings(".diganosticsInnerText").slideToggle();
		// $(this).parent(".diganosticsInnerContent").toggleClass("open");
		// $(".diganosticsInnerContent").not($(this).parent(".diganosticsInnerContent")).removeClass("open");
		$(".diganosticsInnerText").not($(this).siblings(".diganosticsInnerText")).slideUp();
	});
	$(".catViewDiv a.press").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".pressCont").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideUp();
		$(this).parent().parent().siblings(".videos").slideUp();
	});
	$(".catViewDiv a.video").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".videos").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideUp();
		$(this).parent().parent().siblings(".pressCont").slideUp();
	});
	$(".catViewDiv a.event").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".videos").slideUp();
		$(this).parent().parent().siblings(".pressCont").slideUp();
	});
});



