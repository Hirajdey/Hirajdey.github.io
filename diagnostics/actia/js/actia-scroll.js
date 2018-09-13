/*$(document).ready(function(){

 $( "a.scrollLink" ).click(function( event ) {
 event.preventDefault();
 $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
 });
 });*/

/*function scrollToAnchor(aid){
 var aTag = $("a[name='"+ aid +"']");
 $('html,body').animate({scrollTop: aTag.offset().top},'slow');
 }

 $(".diganosticsInnerContent").click(function() { //alert("Current ID: "+this.id)
 //scrollToAnchor('id3');
 //console.log(this.id);
 scrollToAnchor(this.id);
 });*/
$(".scrollToTop").on("click", function() { //alert("test: "+$(window).width());
	//alert("test: "+$(window).height());
	//$("body").scrollTop(0);
	var divId = ["T1","T2","T3","T4","T5","T6","T7","T8","T9","T10","T11","T12","T13","T14"];
	var topSizeXs = ["1050","1100","1150","1150","1250","1400","1450","1500","1550","1600","1650","1700","1750","1800"];
	var topSizeMd = ["700","798","910","990","1070","1140","1210","1290","1290","1350","1410","1490","1550","1610","1690"];
	var topSizeLg = ["550","600","650","700","750","800","850","900","950","1000","1050","1100","1150","1200"];
	if($(window).width() <= 480 ){ //alert("Current ID: "+this.id)
		for (i = 0; i < divId.length; i++) {
			if (this.id == divId[i]){
				//alert("Window Top: "+topSizeXs[i]);
				$(window).scrollTop(topSizeXs[i]);
				//$(window).scrollTop("1400");
			}
		}
	}else if($(window).width() > 480 && $(window).width()<=768 ){ //alert("Current ID: "+this.id)
		for (i = 0; i < 8; i++) { //alert("Window Top: "+topSizeXs[i])
			if (this.id == divId[i]) $(window).scrollTop(topSizeMd[i]);
		}
	} else {
		for (i = 0; i < 8; i++) {
			if (this.id == divId[i]) $(window).scrollTop(topSizeLg[i]);
		}
	}
	/*if(this.id == 'T1') $(window).scrollTop(550);
	 else if(this.id == 'T2')$(window).scrollTop(600);
	 else if(this.id == 'T3')$(window).scrollTop(650);
	 else if(this.id == 'T3')$(window).scrollTop(650);
	 else if(this.id == 'T3')$(window).scrollTop(650);
	 else if(this.id == 'T3')$(window).scrollTop(650);
	 else if(this.id == 'T3')$(window).scrollTop(650);
	 else if(this.id == 'T3')$(window).scrollTop(650);*/
});

/*$("#T2").on("click", function() { //alert("test")
 //$("body").scrollTop(0);
 $(window).scrollTop(550);
 });*/