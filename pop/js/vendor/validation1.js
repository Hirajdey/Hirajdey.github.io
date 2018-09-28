jQuery(document).ready(function($) {
  
  //login id and password function
   function loginpass(){
     
     var valcheck = $("#mob_email").val();
     var valcheck2 = $("#login_pass").val();
     
     var emailpass = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
     var emailresult = emailpass.test(valcheck);
     var resultphone = /^\d{10}?$/.test(valcheck);
     
     var passinput = $("#login_pass").val();
     var testpass = /^([a-zA-Z0-9@*#]{8,15})$/;
     var passresult = testpass.test(passinput);


    if((valcheck == null || valcheck == '') || (emailresult == false && resultphone == false)){
      $('#mob_email').focus();
      $('#mob_email ~ .msg_status').html('Enter Mobile or Email').css("color", "red");

    }else{
      
      $('#mob_email ~ .msg_status').html('Success').css("color", "green");


     if((valcheck2 == null || valcheck2 == '') || (passresult == false)){
       $('#login_pass').focus();
       $('#login_pass ~ .msg_status').html('Enter Password').css("color", "red");
     }else{
       $('#login_pass ~ .msg_status').html('Success').css("color", "green");
     }

    }
  } 
  //login id and password function ends

  
  //onclick-of-login
  $('#loginbtn').click(function(){
    loginpass();
  })
  
  $('#mob_email, #login_pass').keyup(function(){
    loginpass();
  })
  
  $('#login_pass').click(function(){
    loginpass();
  })
  
  
  //sign up page functions
  
  function onlyLetter(inputval){
        
    //var testalpha = /^([(a-z)\s{1}(A-Z)]{3,25})$/;
    var testalpha = /^(([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]{3,})+$/;
    var resultalpha = testalpha.test(inputval.val());
    
    if(resultalpha == false){
      $(inputval).siblings('.msg_status').html('Enter Correct Name').css("color", "red");
      
    }else{
      $(inputval).siblings('.msg_status').html('Success').css("color", "green");
    }
  }
  
  function onlyPhone(inputval){
        
    var testdigit = /^\d{10}?$/;
    var resuldigit = testdigit.test(inputval.val());
    
    if(resuldigit == false){
      $(inputval).siblings('.msg_status').html('Enter Phone No.').css("color", "red");
      
    }else{
      $(inputval).siblings('.msg_status').html('Success').css("color", "green");
    }
  }
  
  function onlyEmail(inputval){
        
    var testemail = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
    var resulemail = testemail.test(inputval.val());
    
    if(inputval.val() != null && inputval.val() != ""){
      
      if(resulemail == false){
        $(inputval).siblings('.msg_status').html('Wrong Email').css("color", "red");

      }else{
        $(inputval).siblings('.msg_status').html('Success').css("color", "green");
      }
      
    }else{
      $(inputval).siblings('.msg_status').html('Enter Email Later').css("color", "grey");

    }
  }
  
  function onlyPassword(inputval){
        
    var testpass = /^([a-zA-Z0-9@*#]{8,15})$/;
    var resulpass = testpass.test(inputval.val());
    
    if(resulpass == false){
      $(inputval).siblings('.msg_status').html('Length min 8, max 15').css("color", "red");
      
    }else{
      $(inputval).siblings('.msg_status').html('Success').css("color", "green");
    }
  }
  
  function matchPassword(inputval){
        
    var matchpass = $('#signup_pass').val();
    var repeatpass = inputval.val();
    
    if(matchpass == null || matchpass == ""){
      
      $(inputval).siblings('.msg_status').html('Enter same password').css("color", "red");

    }else{
    
    if(matchpass === repeatpass){
      $(inputval).siblings('.msg_status').html('Match Success').css("color", "green");
      
    }else{
      $(inputval).siblings('.msg_status').html('Enter same password').css("color", "red");
    }
      }
  }
  
  function adhaarVoter(inputval){
        
    var checkadhaar = /^\d{4}\s?\d{4}\s?\d{4}$/;

    var resuladhaar = checkadhaar.test(inputval.val());

    var checkvoterid = /^([a-zA-Z0-9@*#]{10})$/;
    var resulvoterid = checkvoterid.test(inputval.val());
    
    if(resuladhaar == false && resulvoterid == false){
      $(inputval).siblings('.msg_status').html('Enter Adhaar or Voter Id').css("color", "red");
      
      
    }else{
      if(resuladhaar == true){
        $(inputval).siblings('.msg_status').html('You Entered Adhaar ').css("color", "green");
      }
      
      if(resulvoterid == true){
        $(inputval).siblings('.msg_status').html('You Entered Voter Id ').css("color", "green");
      }
    }
  }
  //govt id validation ends
  
   function hiddeninput(){
     var t = $('#signup_govt').val();
     var r = $("input[id=value_entered]").val(t);
     
     //var finalval = $('#value_entered').val();
     //alert(finalval);

  }
  

  function termsCheck(){
    
    var checkboxstate = $('#terms').prop('checked');
    
    if(checkboxstate == false){
      //alert("false");
        $('#terms').siblings('.msg_status').html('Select Terms ').css("color", "red");
    }else{
        $('#terms').siblings('.msg_status').html('Thanks :)').css("color", "green");;

    }
     
  }

  
  $('#signup_btn').click(function(){
    onlyLetter($('#signup_name'));
    onlyPhone($('#signup_mobile'));
    onlyEmail($('#signup_email'));
    onlyPassword($('#signup_pass'));
    matchPassword($('#signup_repeat'));
    adhaarVoter($('#signup_govt'));
    termsCheck();
    hiddeninput();
  })
  
  $('#signup_name').blur(function(){
    onlyLetter($('#signup_name'));
  })
  
  $('#signup_mobile').blur(function(){
    onlyPhone($('#signup_mobile'));
  })
  
  $('#signup_email').blur(function(){
    onlyEmail($('#signup_email'));
  })
  
  $('#signup_pass').blur(function(){
    onlyPassword($('#signup_pass'));
  })
  
   $('#signup_repeat').blur(function(){
    matchPassword($('#signup_repeat'));
  })
  
  $('#signup_govt').blur(function(){
    adhaarVoter($('#signup_govt'));
    hiddeninput();

  })

  $('#terms').click(function(){
    termsCheck();
  })

});


                       
                       
                       