"use strict";(function(){var a=$(".navigation-trigger a:last-child");var e;var d;var c=$(".head-content-wrapper");var b=$(".footer-content-wrapper");c.load("header.html",function(){var f=$(".navigation-trigger a:last-child");e=$(".search-block a");d=$(".search-block-form");if(utilities.IsExisty(f)){f.click(function(i){var j=$(".mobile-links-list-container");var h=j.css("display");j.slideToggle();var g=$(this).find("i");switch(h){case"none":g.removeClass();g.addClass("fa fa-times");return false;break;case"block":g.removeClass();g.addClass("fa fa-bars");break}})}e.click(function(){console.log("vidi ga");if(d.hasClass("active")){d.removeClass("active")}else{d.addClass("active")}})});b.load("footer.html",function(){})}());
// custom

$("#clariaId").click(function () { //alert("claria")


    /*var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/homepage/claria/index.php";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/claria/index.php";
    else
        window.location.href = "https://diagnostics.medgenome.com/claria/index.php";*/
});
/*$("#actiaId").click(function () {
    var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/homepage/actia/cardio-genetic.html";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/actia/cardio-genetic.html";
    else
        window.location.href = "https://diagnostics.medgenome.com/actia/cardio-genetic.html";
});
$("#primaId").click(function () {
    var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/homepage/prima/somatic-cancer.html";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/prima/somatic-cancer.html";
    else
        window.location.href = "https://diagnostics.medgenome.com/prima/somatic-cancer.html";
});*/
