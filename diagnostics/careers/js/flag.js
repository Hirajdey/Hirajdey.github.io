$("#indiaRow").mouseenter(function() {
    $(".header-contact .us-row").css("background", "none");
    $(".header-contact .us-flag a.us").css("color", "#8C8C8C");
    $(".header-contact .us-row .mailid a").css("color", "#8C8C8C");
    $(".header-contact .us-row .mailid").css("color", "#8C8C8C");
    $(".header-contact .us-row .mailid div:last-child").css('background-image','url(https://diagnostics.medgenome.com/img/home/india-phone-icon.png)');
    $(".header-contact .us-row .mailid div:last-child").css("background-repeat", "no-repeat");

    $(".header-contact .india-row").css('background-image','url(https://diagnostics.medgenome.com/img/home/flag-bg.png)');
    $(".header-contact .india-row").css("height", "43px");
    $(".header-contact .india-flag a.india").css("color", "#FFF");
    $(".header-contact .india-row .mailid a").css("color", "#FFF");
    $(".header-contact .india-row .mailid").css("color", "#FFF");
    $(".header-contact .india-row .mailid div:last-child").css('background-image','url(https://diagnostics.medgenome.com/img/home/us-phone-icon.png)');
    $(".header-contact .india-row .mailid div:last-child").css("background-repeat", "no-repeat");

    //console.log("mouse over");
});

$("#indiaRow").mouseleave(function() {
    $(".header-contact .india-row").css("background", "none");
    $(".header-contact .india-flag a.india").css("color", "#8C8C8C");
    $(".header-contact .india-row .mailid a").css("color", "#8C8C8C");
    $(".header-contact .india-row .mailid").css("color", "#8C8C8C");
    $(".header-contact .india-row .mailid div:last-child").css('background-image','url(https://diagnostics.medgenome.com/img/home/india-phone-icon.png)');
    $(".header-contact .india-row .mailid div:last-child").css("background-repeat", "no-repeat");

    $(".header-contact .us-row").css('background-image','url(https://diagnostics.medgenome.com/img/home/flag-bg.png)');
    $(".header-contact .us-flag a.us").css("color", "#FFF");
    $(".header-contact .us-row .mailid a").css("color", "#FFF");
    $(".header-contact .us-row .mailid").css("color", "#FFF");
    $(".header-contact .us-row .mailid div:last-child").css('background-image','url(https://diagnostics.medgenome.com/img/home/us-phone-icon.png)');
    $(".header-contact .us-row .mailid div:last-child").css("background-repeat", "no-repeat");

    //console.log("mouse leave");
});