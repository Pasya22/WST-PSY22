 $(document).ready(function() {

                    

    $.ajax({    //create an ajax request to display.php
    type: "GET",
    url: "GD.php",             
    dataType: "html",   //expect html to be returned                
    success: function(response){                    
        $("#response").html(response); 
        //alert(response);
    }


});
});
// initialize jQuery
$(function() {
    
    
   
    $(document).on('submit', 'form', function(eve){
        eve.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'insert.php',
            data: $('form').serialize(),
            success: function(data){                    
            }
        }
    );
    });


    
    
    $(document).on('keypress', 'input', function(eve){
      if (eve.which == 13) {
        $('form').submit();
        $(this).val("");
        $("#content").attr({ scrollTop: $("#content").attr("scrollHeight") });
        return false;    
      }
    });    
});
