"use strict";(function(){var a=$(".navigation-trigger a:last-child");var e;var d;var c=$(".head-content-wrapper");var b=$(".footer-content-wrapper");c.load("header.html",function(){var f=$(".navigation-trigger a:last-child");e=$(".search-block a");d=$(".search-block-form");if(utilities.IsExisty(f)){f.click(function(i){var j=$(".mobile-links-list-container");var h=j.css("display");j.slideToggle();var g=$(this).find("i");switch(h){case"none":g.removeClass();g.addClass("fa fa-times");return false;break;case"block":g.removeClass();g.addClass("fa fa-bars");break}})}e.click(function(){console.log("vidi ga");if(d.hasClass("active")){d.removeClass("active")}else{d.addClass("active")}})});b.load("footer.html")}());
// custom
$("#clariaId").click(function () {
    $("#clariaLogo").attr("src","img/claria-hover.png");

    $("#primaLogo").attr("src","img/prima-logo.png");
    $("#actiaLogo").attr("src","img/actia.png");
});
$("#actiaId").click(function () {
    $("#actiaLogo").attr("src","img/actia-hover.png");

    $("#clariaLogo").attr("src","img/claria-logo.png");
    $("#primaLogo").attr("src","img/prima-logo.png");
});
$("#primaId").click(function () {
    $("#primaLogo").attr("src","img/prima-hover.png");

    $("#clariaLogo").attr("src","img/claria-logo.png");
    $("#actiaLogo").attr("src","img/actia.png");
});
