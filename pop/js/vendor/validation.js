jQuery(document).ready(function($) {
  
  //user-id mobile or email
     
 
   $("#mob_email").keyup(function(){
    
    var userid = $("#mob_email").val();
    
    var emailpass = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;            
    var resultmail = emailpass.test(userid);
    
    var resultphone = /^\d{10}?$/.test(userid);
    
    if(resultmail == false && resultphone == false){
      
      $(this).focus().css('border-color', 'red');
      $("#mob_email ~ label").css('color', 'red'); 
      $(".bar").remove();
      $("#mob_email ~ label").removeClass("validinput");
      
    }else{
    
      $(this).css('border-color', '#00783A');
      $("#mob_email ~ label").addClass("validinput");
    }

  });
    
  
  
  //login password
  $("#login_pass").keyup(function(){
    
    var passinput = $("#login_pass").val();
    //var testpass = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    
    var testpass = /^([a-zA-Z0-9@*#]{8,15})$/;
        
    var passresult = testpass.test(passinput);
        
    if(passresult == false){
      
      $(this).focus().css('border-color', 'red');
      $("#login_pass ~ label").css('color', 'red'); 
      $(".bar").remove();
      $("#login_pass ~ label").removeClass("validinput");
      
    }else{
      
      $(this).css('border-color', '#00783A');
      $("#login_pass ~ label").addClass("validinput");
    }
    
  });
  
  //signup name
    
  $("#signup_name").blur(function(){
    
    var mobilenum = $("#signup_name").val();
   
    var resultphone = /^[a-z\sA-Z]+$/.test(mobilenum);
    
    if(resultphone == false){
      
      $(this).focus().css('border-color', 'red');
      $("#signup_name ~ label").css('color', 'red'); 
      $(".bar").remove();
      
    }else{
      $(this).css('border-color', '#00783A');
      $("#signup_name ~ label").addClass("validinput");
    }
        
  });
  
  //signup mobile
  
  $("#signup_mobile").blur(function(){
    
    var mobilenum = $("#signup_mobile").val();
   
    var resultphone = /^\d{10}?$/.test(mobilenum);
    
    if(resultphone == false){
      
      $(this).focus().css('border-color', 'red');
      $("#signup_mobile ~ label").css('color', 'red'); 
      $(".bar").remove();
      
    }else{
      $(this).css('border-color', '#00783A');
      $("#signup_mobile ~ label").addClass("validinput");
    }
        
  });
  
  //signup email
  
   $("#signup_email").blur(function(){
    
    var emailid = $("#signup_email").val();
   
    var emailpass = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;   
     
    var resultemail = emailpass.test(emailid);
    
    if(resultemail == false){
      
      $(this).focus().css('border-color', 'red');
      $("#signup_email ~ label").css('color', 'red'); 
      $(".bar").remove();
      
    }else{
      $(this).css('border-color', '#00783A');
      $("#signup_email ~ label").addClass("validinput");
    }
        
  });
  
  //signup_pass
  $("#signup_pass").blur(function(){
    
    var passinput = $("#signup_pass").val();
    var testpass = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
        
    var passresult = testpass.test(passinput);
        
    if(passresult == false){
      
      $(this).focus().css('border-color', 'red');
      $("#signup_pass ~ label").css('color', 'red'); 
      $(".bar").remove();
      
    }else{
      
      $(this).css('border-color', '#00783A');
      $("#signup_pass ~ label").addClass("validinput");
    }
    
  });
  
  //adhar validation
  $("#signup_adhar").blur(function(){
    
    var passinput = $("#signup_adhar").val();
    var testpass = /^\d{4}\s\d{4}\s\d{4}$/;
        
    var passresult = testpass.test(passinput);
    
    var voterid = /^([a-zA-Z0-9@*#]{8,12})$/.test(passinput);

    
    //alert(passresult);
        
    if(passresult == false && voterid ==false){
      
      $(this).focus().css('border-color', 'red');
      $("#signup_adhar ~ label").css('color', 'red'); 
      $(".bar").remove();
      
    }else{
      
      if(passresult == true){
        $("#signup_adhar ~ label").text("Adhaar Id");
      }
      
      if(voterid == true){
        $("#signup_adhar ~ label").text("Voter Id");
      }
      
      $(this).css('border-color', '#00783A');
      $("#signup_adhar ~ label").addClass("validinput");
    }
    
  });
  
  //login btn
   $("#loginbtn").click(function(){
     
     var valcheck = $("#mob_email").val();
     var valcheck2 = $("#login_pass").val();
     var emailpass = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
     var emailresult = emailpass.test(valcheck);
     var resultphone = /^\d{10}?$/.test(valcheck);

    
     if(valcheck == null || valcheck == ''){
       $('#mob_email').focus();
       
     }else{
       
       if(valcheck2 == null || valcheck2 == ''){
         $('#login_pass').focus();
       }
       
     }
     
    //var emailpass = /([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
     
  //  var emailresult = emailpass.test(valcheck);
     
   // var resultphone = /^\d{10}?$/.test(valcheck);

     
//     if(emailresult == false && resultphone == false){
//     // $('#mob_email ~ .msg_status').html('Wrong User ID');
//
//     }
     
     
     
     
     //var testpass = /^([a-zA-Z0-9@*#]{8,15})$/;
     
     //var passresult = testpass.test(valcheck2);

//    if(passresult == false){
//      
//      
//    }
     
       
  })
   
  //signup_btn
   
   $('#signup_btn').click(function(){
     
     var valuecheck1 = $('#signup_name').val();
     if(valuecheck1 == null || valuecheck1 == ''){
       $('#signup_name').focus();
     }
     
     var valuecheck2 = $('#signup_mobile').val();
     if(valuecheck2 == null || valuecheck2 == ''){
       $('#signup_mobile').focus();
     }
     
     var valuecheck3 = $('#signup_email').val();
     if(valuecheck3 == null || valuecheck3 == ''){
       $('#signup_email').focus();
     }
     
     var valuecheck4 = $('#signup_pass').val();
     if(valuecheck4 == null || valuecheck4 == ''){
       $('#signup_pass').focus();
     }
     
     var valuecheck5 = $('#signup_adhar').val();
     if(valuecheck5 == null || valuecheck5 == ''){
       $('#signup_adhar').focus();
     }
     
     //var terms = $('#terms').val().checked;
    // alert(terms);
     
     //if()
     if(document.getElementById('terms').checked) {

     } else {
          alert('Please agri terms');

      }
     
//     if()
//     $('#isAgeSelected').click(function() {
//      $("#txtAge").toggle(this.checked);
//     });
     
   })

});


                       
                       
                       