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
$(".diganosticsInnerContent").on("click", function() { //alert("test: "+$(window).width());
	//alert("test: "+$(window).height());
	//$("body").scrollTop(0);
	var divId = ["T1","T2","T3","T4","T5","T6","T7","T8","T9","T10","T11"];
	var topSizeXs = ["750","798","910","990","1070","1140","1210","1290","1350","1410","1490"];
	var topSizeMd = ["700","798","910","990","1070","1140","1210","1290","1290","1350","1410","1490"];
	var topSizeLg = ["550","600","650","700","750","800","850","900","950","1000","1050"];
	if($(window).width() <= 480 ){ //alert("<=480")
		for (i = 0; i < 8; i++) { //alert("Window Top: "+topSizeXs[i])
			if (this.id == divId[i]) $(window).scrollTop(topSizeXs[i]);
		}
	}else if($(window).width() > 480 && $(window).width()<=768 ){ //alert("<=1024")
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