$(document).ready(function(){
	$('div.dropdown').each(function() {
		var $dropdown = $(this);

		$("a.dropdown-link", $dropdown).click(function(e) { //alert($(this).attr('id'));

			if($(this).attr('id') == 'claria'){ //alert($("div.dropdown-container").is(":visible"));

				// banner change
				/*$("#claria-banner").show();

				 $("#actia-banner").hide();
				 $("#prima-banner").hide();*/

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

				//$("#dropdown-1 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
				//$("#dropdown-2 .dropdown-link .listbg .catIcon2").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
				//$("#dropdown-3 .dropdown-link .listbg .catIcon3").addClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-1 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("active-logo");
				 }

				// white color divider add in between tabs
				/*$("#dropdown-1 .dropdown-link .divider").removeClass("white-divider");
				$("#dropdown-2 .dropdown-link .divider").addClass("white-divider");*/

			} else if($(this).attr('id') == 'actia'){

				// banner change
				/*$("#actia-banner").show();

				 $("#claria-banner").hide();
				 $("#prima-banner").hide();*/

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


				//$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("unlink");

				//$("#dropdown-2 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background"); // change active logo 
				//$("#dropdown-1 .dropdown-link .listbg .catIcon1").addClass("unlink");
				$("#dropdown-1 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
				//$("#dropdown-3 .dropdown-link .listbg .catIcon3").addClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-2 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("active-logo");
				 }

				// white color divider add in between tabs
				/*$("#dropdown-2 .dropdown-link .divider").removeClass("white-divider");
				$("#dropdown-1 .dropdown-link .divider").addClass("white-divider");*/

			} else if($(this).attr('id') == 'prima'){

				// banner change
				/*$("#prima-banner").show();

				 $("#claria-banner").hide();
				 $("#actia-banner").hide();*/

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

				/*$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div*/

				$("#dropdown-1 .dropdown-link").removeClass("active-tab-background");
				//$("#dropdown-1 .dropdown-link .listbg .catIcon1").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-2 .dropdown-link").removeClass("active-tab-background");
				//$("#dropdown-2 .dropdown-link .listbg .catIcon2").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				if($("div.dropdown-container").is(":visible") == true){
					$("#dropdown-3 .dropdown-link").removeClass("active-tab-background");
					$("#dropdown-3 .dropdown-link .tabText").removeClass("active-text");
					$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("active-logo");
				 }

				// white color divider add in between tabs
				/*$("#dropdown-3 .dropdown-link .divider").removeClass("white-divider");
				$("#dropdown-1 .dropdown-link .divider").addClass("white-divider");
				$("#dropdown-2 .dropdown-link .divider").addClass("white-divider");*/
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