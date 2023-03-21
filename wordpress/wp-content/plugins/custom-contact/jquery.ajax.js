jQuery(document).ready( function($){
   var name = $("#nom").val();
  var email = $("#email").val();
  var comment = $("#message").val();
  if(name == "" || comment == "" ) {
    $("#error_message").show().html("All Fields are Required");
  } else {
    $("#error_message").html("").hide();
    $.ajax({
      url: ajax_object.ajaxurl,
      type: "POST",
      data: "name="+name+"&message="+comment+"&email="+email,
      success: function(data){
        $('#success_message').fadeIn().html(data);
        setTimeout(function() {
          $('#success_message').fadeOut("slow");
        }, 2000 );

      }
    });
  }
})
 