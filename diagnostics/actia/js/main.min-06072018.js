"use strict";(function(){var a=$(".navigation-trigger a:last-child");var e;var d;var c=$(".head-content-wrapper");var b=$(".footer-content-wrapper");c.load("header.html",function(){var f=$(".navigation-trigger a:last-child");e=$(".search-block a");d=$(".search-block-form");if(utilities.IsExisty(f)){f.click(function(i){var j=$(".mobile-links-list-container");var h=j.css("display");j.slideToggle();var g=$(this).find("i");switch(h){case"none":g.removeClass();g.addClass("fa fa-times");return false;break;case"block":g.removeClass();g.addClass("fa fa-bars");break}})}e.click(function(){console.log("vidi ga");if(d.hasClass("active")){d.removeClass("active")}else{d.addClass("active")}})});b.load("footer.html",function(){})}());
// custom
$("#clariaId").click(function () {
    var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/claria/index.php";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/index.php";
    else
        window.location.href = "https://diagnostics.medgenome.com/index.php";
});
$("#actiaId").click(function () {
    var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/claria/actia/cardio-genetic.php";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/actia/cardio-genetic.php";
    else
        window.location.href = "https://diagnostics.medgenome.com/actia/cardio-genetic.php";
});
$("#primaId").click(function () {
    var host = window.location.host;

    if(host == 'localhost')
        window.location.href = "http://localhost/claria/prima/somatic-cancer.php";
    else if(host == 'staging.medgenome.com')
        window.location.href = "http://staging.medgenome.com/prima/somatic-cancer.php";
    else
        window.location.href = "https://diagnostics.medgenome.com/prima/somatic-cancer.php";
});