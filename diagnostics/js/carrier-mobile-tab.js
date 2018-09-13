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
				$("#dropdown-1 .dropdown-link").removeClass("unlink");
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("unlink");
				//$("#dropdown-1 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-2 .dropdown-link").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").addClass("unlink");
				//$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").addClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").addClass("unlink");
				//$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				// back to usual bg color for all tabs
				/*if($("div.dropdown-container").is(":visible") == true){
				 $("#dropdown-2 .dropdown-link").removeClass("unlink");
				 $("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("unlink");

				 $("#dropdown-3 .dropdown-link").removeClass("unlink");
				 $("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("unlink");
				 }*/

			} else if($(this).attr('id') == 'actia'){

				// banner change
				/*$("#actia-banner").show();

				 $("#claria-banner").hide();
				 $("#prima-banner").hide();*/

				// Tab background change
				/*$("#dropdown-2 .dropdown-link").removeClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-1 .dropdown-link").addClass("unlink");
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").addClass("unlink");
				$("#dropdown-1 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-3 .dropdown-link").addClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").addClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div*/

				// back to usual bg color for all tabs
				/*if($("div.dropdown-container").is(":visible") == true){
				 $("#dropdown-1 .dropdown-link").removeClass("unlink");
				 $("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("unlink");

				 $("#dropdown-3 .dropdown-link").removeClass("unlink");
				 $("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("unlink");
				 }*/

			} else if($(this).attr('id') == 'prima'){

				// banner change
				/*$("#prima-banner").show();

				 $("#claria-banner").hide();
				 $("#actia-banner").hide();*/

				// Tab background change
				/*$("#dropdown-3 .dropdown-link").removeClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .catIcon3").removeClass("unlink");
				$("#dropdown-3 .dropdown-link .listbg .hoverEffect").removeClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-1 .dropdown-link").addClass("unlink");
				$("#dropdown-1 .dropdown-link .listbg .catIcon1").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div

				$("#dropdown-2 .dropdown-link").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .catIcon2").addClass("unlink");
				$("#dropdown-2 .dropdown-link .listbg .hoverEffect").addClass("bottom-bg-unlink"); // change the bg for bottom div*/

				// back to usual bg color for all tabs
				/*if($("div.dropdown-container").is(":visible") == true){
				 $("#dropdown-1 .dropdown-link").removeClass("unlink");
				 $("#dropdown-1 .dropdown-link .listbg .catIcon1").removeClass("unlink");

				 $("#dropdown-2 .dropdown-link").removeClass("unlink");
				 $("#dropdown-2 .dropdown-link .listbg .catIcon2").removeClass("unlink");
				 }*/
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