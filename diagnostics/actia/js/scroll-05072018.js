window.onscroll = function() { //alert("Scroll "+document.body.scrollTop+" Element: "+document.documentElement.scrollTop)
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) { //alert("Above 600")
        //document.getElementById("fixed-top").className = "fixed-top";
        $(".site-pages-menu .links").addClass('fixed-top');
        $(".site-pages-menu .test-menu").addClass('fixed-test-menu');
    } else {
        //document.getElementById("fixed-top").className = "";
        $(".site-pages-menu .links").removeClass('fixed-top');
        $(".site-pages-menu .test-menu").removeClass('fixed-test-menu');
    }
}