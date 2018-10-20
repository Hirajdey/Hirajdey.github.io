

$(document).ready(function() {

	var hamBtn = jQuery('#hamburgerBtn');
  var siteNav = jQuery('#siteNav');
  var closeNav = jQuery('#closeNav');

		hamBtn.click(function(){
			jQuery(this).css({'display':'none'});
			closeNav.css({'display':'block'});
			siteNav.addClass('sidenavbarSlideRgt');
		});

		closeNav.click(function(){		
			hamBtn.css({'display':'block'});
			jQuery(this).css({'display':'none'});
			siteNav.removeClass('sidenavbarSlideRgt');
		});

});



