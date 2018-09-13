$(document).ready(function(){
	$('div.dropdown').each(function() {
		var $dropdown = $(this);

		$("a.dropdown-link", $dropdown).click(function(e) { //alert($(this).attr('id'));

			if($(this).attr('id') == 'claria'){ //alert($("div.dropdown-container").is(":visible"));

				// active tab move to top
				/*if($(window).width() <= 480 ){ //alert("<=480")
					for (i = 0; i < 8; i++) { //alert("Window Top: "+topSizeXs[i])
						if (this.id == divId[i]) $(window).scrollTop(topSizeXs[i]);
					}
				}*/
				if($(window).width() < 480 ){
					$(window).scrollTop("100");
				} else if($(window).width() >= 480 ){
					$(window).scrollTop("180");
				}

				// banner change
				$("#claria-banner").show();

				 $("#actia-banner").hide();
				 $("#prima-banner").hide();

				// Tab background change
				$("#dropdown-1 .dropdown-link").addClass("active-tab-background");
				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");

				// text change
				$("#dropdown-1 .dropdown-link .tabText").addClass("active-text");
				$("#dropdown-2 .dropdown-link .tabText").removeClass("active-text");
				$("#dropdown-3 .dropdown-link .tabText").removeClass("active-text");

				// change the logo
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").addClass("active-logo");
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("active-logo");
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("active-logo");

				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-1 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("active-logo");
				 }
			} else if($(this).attr('id') == 'actia'){

				// active tab move to top
				if($(window).width() < 480 ){ //alert("<=480")
					$(window).scrollTop("240");
				} else if($(window).width() >= 480 ){
					$(window).scrollTop("310");
				}

				// banner change
				$("#actia-banner").show();

				 $("#claria-banner").hide();
				 $("#prima-banner").hide();

				// Tab background change
				$("#dropdown-2 .dropdown-link").addClass("active-tab-background");
				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");

				// text change
				$("#dropdown-2 .dropdown-link .tabText").addClass("active-text");

				$("#dropdown-1 .dropdown-link .tabText").removeClass("active-text");
				$("#dropdown-3 .dropdown-link .tabText").removeClass("active-text");

				// change the logo
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").addClass("active-logo");
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("active-logo");
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("active-logo");

				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background"); // change active logo
				$("#dropdown-1 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-2 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("active-logo");
				 }
			} else if($(this).attr('id') == 'prima'){

				// active tab move to top
				if($(window).width() < 480 ){ //alert("<=480")
					$(window).scrollTop("370");
				} else if($(window).width() >= 480 ){
					$(window).scrollTop("440");
				}

				// banner change
				$("#prima-banner").show();

				 $("#claria-banner").hide();
				 $("#actia-banner").hide();

				// Tab background change
				$("#dropdown-3 .dropdown-link").addClass("active-tab-background");
				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");

				// text change
				$("#dropdown-3 .dropdown-link .tabText").addClass("active-text");
				$("#dropdown-1 .dropdown-link .tabText").removeClass("active-text");
				$("#dropdown-2 .dropdown-link .tabText").removeClass("active-text");

				// change the logo
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").addClass("active-logo");
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("active-logo");
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("active-logo");

				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-3 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("active-logo");
				 }
			}

			e.preventDefault();
			$div = $("div.dropdown-container", $dropdown);
			$div.toggle();
			$("div.dropdown-container").not($div).hide();
			return false;
		});

	});

	$('html').click(function(){
		$("div.dropdown-container").hide();
	});
});