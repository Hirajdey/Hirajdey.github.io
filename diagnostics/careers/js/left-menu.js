
//var diseases = ["cardiology", "connective-tissue-disorder", "dermatology", "endocrinology", "ent", "haematology", "immunology", "metabolic-disorders", "miscellaneous", "nephrology", "neurology", "oncology"];
var diseases_id = ["ca", "ctd", "der", "end", "en", "hae", "imm", "met", "mis", "nep", "neu", "onc"];

//var diseases = ["cardiology", "connective-tissue-disorder", "dermatology"];
//var diseases_id = ["ca", "ctd", "der"];

/*$("#cardiology").click(function () { alert(this.id);
  if(this.id == "cardiology") { alert("test");
    $("#"+diseases_id[i]).show();
  }
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != diseases_id[i])
      $("#"+diseases_id[x]).hide();
  }
});*/

$("#left_menu_cardiology").click(function () {
  $("#ca").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "ca")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_connective-tissue-disorder").click(function () {
  $("#ctd").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "ctd")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_dermatology").click(function () {
  $("#der").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "der")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_endocrinology").click(function () {
  $("#end").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "end")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_ent").click(function () {
  $("#en").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "en")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_haematology").click(function () {
  $("#hae").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "hae")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_immunology").click(function () {
  $("#imm").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "imm")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_metabolic-disorders").click(function () {
  $("#met").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "met")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_miscellaneous").click(function () {
  $("#mis").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "mis")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_nephrology").click(function () {
  $("#nep").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "nep")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_neurology").click(function () {
  $("#neu").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "neu")
      $("#"+diseases_id[x]).hide();
  }
});

$("#left_menu_oncology").click(function () {
  $("#onc").show();
  for(var x=0; x< diseases_id.length; x++){
    if(diseases_id[x] != "onc")
      $("#"+diseases_id[x]).hide();
  }
});



