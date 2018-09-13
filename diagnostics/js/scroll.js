window.onscroll = function() { //alert("Scroll "+document.body.scrollTop+" Element: "+document.documentElement.scrollTop)
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) { //alert("Above 600")
        //document.getElementById("fixed-top").className = "fixed-top";
        $(".links").addClass('fixed-top');
    } else {
        //document.getElementById("fixed-top").className = "";
        $(".links").removeClass('fixed-top');
    }
}