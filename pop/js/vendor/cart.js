jQuery(document).ready(function($) {
  
  //increment function
  function increment(a, b){
    
    var maxqty = 5;
    
    if(a < 5){
      var p = $(b).siblings('input').val(a+1);
      var vb = (p.val());
      var itmprz = $(b).parent().siblings().children('.price').html();
      $(b).parent().children('.price').html((vb*itmprz));  
    }    
  }
      
  //decrement function
   function decrement(a, b){
     if(a > 1){
       var p = $(b).siblings('input').val(a-1);
       var vb = (p.val());
       var itmprz = $(b).parent().siblings().children('.price').html();
       var currentval = $(b).parent().children('.price').html();
       $(b).parent().children('.price').html((currentval-itmprz));     
     }
   }
  
  function removeCartItem(id){
    $('#'+id).hide('slow', function(){
      $(this).remove();  
    });
  }
  
  $(".plus").click(function(){
     var num = parseInt($(this).siblings('input').val());
     var abc = $(this);
      increment(num, abc);
  })

  $(".minus").click(function(){
     var num = parseInt($(this).siblings('input').val());
     var abc = $(this);
      decrement(num, abc);
  })
  
  $(".kg-remove-link").click(function(){
    var dataId = $(this).attr('data-id');
    //var parent = $(this).parent().parent();
    var id = "cartItem"+dataId;
    //console.log(id);
    removeCartItem(id);
  })
  
  
});


                       
                       
                       