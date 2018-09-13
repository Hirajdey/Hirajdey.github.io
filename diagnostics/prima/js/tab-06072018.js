$( function() {
    $(".tabs ul .claria-tab").addClass('claria-link');
    $(".tabs ul .claria-tab .claria-hover-div").addClass('hover-effect');

    var number = '';

    //Toggle functions
    for(number = 0; number<=16; number++){
        $("#toggle"+number).hide();
    }

    $("#press-data").hide();
    $("#video-data").hide();
    $("#event-data").hide();
    //console.log("document ready");

    //$("#toggle10").show();
} );

////////////// Toggle ///////////////////
var id = '';
function toggleFunction(page, current){

    var toggle_array = ["toggle-0", "toggle-1", "toggle-2", "toggle-3", "toggle-4", "toggle-5", "toggle-6", "toggle-7", "toggle-8", "toggle-9", "toggle-10", "toggle-11", "toggle-12",
        "toggle-13", "toggle-14", "toggle-15", "toggle-16"];

    var current_id = $(current).attr('id'); //alert(current_id)
    var current_title = $(current).attr('title');

    for(id=0; id<toggle_array.length; id++){ //alert(current_id + " == " +toggle_array[id])
        if(current_id == toggle_array[id]) {
            if(current_title == 'close') { //alert(id)
                $("#toggle" + id).show();
                $("#"+current_id).attr("title", "open");
            }
            else {
                $("#toggle" + id).hide();
                $("#"+current_id).attr("title", "close");
            }
        }
        else {
            var other_toggle = toggle_array[id];
            $("#toggle" + id).hide();
            $("#"+other_toggle).attr("title", "close")
        }
    }
}
$("#toggle-0").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-1").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-2").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-3").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-4").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-5").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-6").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-7").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-8").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-9").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-10").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-11").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-12").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-13").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-14").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-15").click(function () {
    toggleFunction('carrier', this);
});
$("#toggle-16").click(function () {
    toggleFunction('carrier', this);
});

// press
$("#press").mouseenter(function() {
    $(".press-video-event .press .icon").addClass("icon-hover");
    $(".press-video-event .press .text").addClass("text-hover");
});
$("#press").mouseleave(function() {
    $(".press-video-event .press .icon").removeClass('icon-hover');
    $(".press-video-event .press .text").removeClass("text-hover");
});

// video
$("#video").mouseenter(function() {
    $(".press-video-event .video .icon").addClass("icon-hover");
    $(".press-video-event .video .text").addClass("text-hover");
});
$("#video").mouseleave(function() {
    $(".press-video-event .video .icon").removeClass('icon-hover');
    $(".press-video-event .video .text").removeClass("text-hover");
});

// event
$("#event").mouseenter(function() {
    $(".press-video-event .event .icon").addClass("icon-hover");
    $(".press-video-event .event .text").addClass("text-hover");
});
$("#event").mouseleave(function() {
    $(".press-video-event .event .icon").removeClass('icon-hover');
    $(".press-video-event .event .text").removeClass("text-hover");
});

// press click
$("#press").click(function () {
    var current_title = $("#press").attr('title');
    if(current_title == 'close') {
        $("#press-data").show();
        $("#press").attr("title", "open");

        $("#video").attr("title", "close");
        $("#event").attr("title", "close");
    }
    else{
        $("#press-data").hide();
        $("#press").attr("title", "close");
    }

    $("#video-data").hide(); $("#event-data").hide();

    // add
    if(current_title == 'close') {
        $(".press-video-event .press .icon").addClass("click-icon-hover");
        $(".press-video-event .press .text").addClass("click-text-hover");
        $(".press-video-event .press").addClass("press-hover");
    } else {
        $(".press-video-event .press .icon").removeClass("click-icon-hover");
        $(".press-video-event .press .text").removeClass("click-text-hover");
        $(".press-video-event .press").removeClass("press-hover");
    }

    // remove
    $(".press-video-event .video .icon").removeClass("click-icon-hover");
    $(".press-video-event .video .text").removeClass("click-text-hover");
    $(".press-video-event .video").removeClass("video-hover");

    $(".press-video-event .event .icon").removeClass("click-icon-hover");
    $(".press-video-event .event .text").removeClass("click-text-hover");
    $(".press-video-event .event").removeClass("event-hover");
});

// video click
$("#video").click(function () {

    var current_title = $("#video").attr('title');
    if(current_title == 'close') {
        $("#video-data").show();
        $("#video").attr("title", "open");

        $("#press").attr("title", "close");
        $("#event").attr("title", "close");
    }
    else{
        $("#video-data").hide();
        $("#video").attr("title", "close");
    }

    $("#press-data").hide(); $("#event-data").hide();

    // add
    if(current_title == 'close') {
        $(".press-video-event .video .icon").addClass("click-icon-hover");
        $(".press-video-event .video .text").addClass("click-text-hover");
        $(".press-video-event .video").addClass("video-hover");
    } else {
        $(".press-video-event .video .icon").removeClass("click-icon-hover");
        $(".press-video-event .video .text").removeClass("click-text-hover");
        $(".press-video-event .video").removeClass("video-hover");
    }

    // remove
    $(".press-video-event .press .icon").removeClass("click-icon-hover");
    $(".press-video-event .press .text").removeClass("click-text-hover");
    $(".press-video-event .press").removeClass("press-hover");

    $(".press-video-event .event .icon").removeClass("click-icon-hover");
    $(".press-video-event .event .text").removeClass("click-text-hover");
    $(".press-video-event .event").removeClass("event-hover");
});

// event click
$("#event").click(function () {
    var current_title = $("#event").attr('title');
    if(current_title == 'close') {
        $("#event-data").show();
        $("#event").attr("title", "open");

        $("#video").attr("title", "close");
        $("#press").attr("title", "close");
    }
    else{
        $("#event-data").hide();
        $("#event").attr("title", "close");
    }
    $("#press-data").hide(); $("#video-data").hide();

    // add
    if(current_title == 'close') {
        $(".press-video-event .event .icon").addClass("click-icon-hover");
        $(".press-video-event .event .text").addClass("click-text-hover");
        $(".press-video-event .event").addClass("event-hover");
    } else {
        $(".press-video-event .event .icon").removeClass("click-icon-hover");
        $(".press-video-event .event .text").removeClass("click-text-hover");
        $(".press-video-event .event").removeClass("event-hover");
    }

    // remove
    $(".press-video-event .press .icon").removeClass("click-icon-hover");
    $(".press-video-event .press .text").removeClass("click-text-hover");
    $(".press-video-event .press").removeClass("press-hover");

    $(".press-video-event .video .icon").removeClass("click-icon-hover");
    $(".press-video-event .video .text").removeClass("click-text-hover");
    $(".press-video-event .video").removeClass("video-hover");


});