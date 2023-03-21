
<?php
/**
 *@package CustomForm
 * Plugin Name:       Custom form
 * Plugin URI:        
 * Description:       Just Insert Data into Custom Form
 * Version:           1.0
 * Author:            zarrouki feriel
 * Author URI:        
 */
 /*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/
  if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

 	 add_action("admin_menu" , "addMenu");
function addMenu()
{
	add_menu_page("dashicons-admin-comment", "contact", 4,"exemple-options", "custom_view");
}
 	function activate(){
	//generate a cpt
 	//flush rewrite rules
 flush_rewrite_rules();
 }
function deactivate(){
	flush_rewrite_rules();
}
function uninstall(){
	
}
function custom_view() {
	?>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript " src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
<script>
    $(function () {
        $.ajax({
            dataType: "JSON",
            type: "GET",
            url: "http://localhost/voix_enfant/wordpress/wp-content/plugins/custom-contact/API/affich.php",
            success: function (data) {
                console.table(data);
             
             data.forEach(function(res) {
                $("#contactData tbody").append(
                  "<tr>" +
                    "<td>"+res.email+"</td>" +
                    "<td>"+res.nom+"</td>" +
                    "<td>"+res.objet+"</td>" +
                    "<td>"+res.message+"</td>" +
                   
                   "</tr>"
              );
             });
                             $('#contactData').DataTable();

            },
            error: function (er) {

            }
        });
    });
</script>

 <script>
$(document).ready( function () {
 } );





</script>


<table id="contactData" border="1">
	<thead>
  <tr>
       <th>email</th>
       <th>nom</th>
       <th>objet</th>
       <th>message</th>
       
   </tr>  
</thead>
   <tbody></tbody>

</table>
   

<?php
}
function custom_form() {

 ?>
 <style>
		.button {
  background-color: #f4ad42;  
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
   #form .input-control {
     width:90%;
     size:50%;
     color: black;
     margin-bottom:5%;
   }
   #form {
    margin-left:30px;
   }
   #val{
    background-color:#f83402;
    color:white;
    margin-left:69px;

    }
   


	</style> 
 <form id="form" method="post">
 <label for name=""> Email:</label><br>
 <input type = "email" name = "email" id ="email" placeholder = "Enter Email" required="" class="input-control"><br>
 <label for name=""> Nom:</label><br>
 <input type = "text" name = "nom" id ="nom" placeholder = "Enter Name" required="" class="input-control"><br>
 <label for name=""> objet:</label><br>
 <input type = "text" name = "objet" id ="objet" placeholder = "Enter objet" required="" class="input-control"><br>
 <label > Message:</label><br>
 <textarea name="message" id="message" required="" class="input-control"></textarea><br><br>
 
<button  class="button"  id="val" onclick="addcontact()" name="submit">Envoyer</button>
  <div class="messagesucc">message envoyé</div>
    <div class="messagefail">message non envoyé</div>

  </form>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
<script   src="alertify.js"></script>
<script   src="alertify.min.js"></script>
<style type="text/css" src="css/alertify.css"></style>
 <script>

  function addcontact(){

  	if(
        $("#nom").val() != "" && 
        $("#email").val() != "" && 
        $("#objet").val() != "" && 
         $("#message").val() != ""
        ){ 
        var regexMail = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(regexMail.test($("#email").val()))
   {
  	jQuery(function($){
    $.ajax({
          dataType :"JSON",
          type :"POST",
          data:jQuery("#form").serialize(),
          url:"http://127.0.0.1/voix_enfant/wordpress/wp-content/plugins/custom-contact/API/formu.php",
        success:function(data)
          { 
          	          console.log(data);

            if(data.status==1)
              {
              $('.messagesucc').show();
              $('.messagefail').hide();
               $('#form')[0].reset();
              }
            else
              {
              $('.messagefail').show();
              } 
           },
      error: function(er)
        { 
                $('.messagefail').show();
                $('.messagesucc').hide();
        }
				});});
  	}
  else
   {
    alert("email incorrecte");
      $(".messageFail").show();
      $(".messageSuccess").hide();
   }
  	 }

  	 else
  	 { 
  	 	  alertify.warning('Warning notification message.'); 

        $(".messageFail").show();
               ' <div class="alert alert-warning"> <strong> Warning!</strong> tous les champs sont obligatoire. </div> ';

     }
  }
$(function(){
	 $('.messagesucc').hide();

 $('.messagefail').hide();


});
 

  
</script>
 
 <?php 
}
add_shortcode('display', 'custom_form');
//activation
register_activation_hook(__FILE__,array($customform,'activate'));
//deactivation
register_deactivation_hook(__FILE__,array($customform,'deactivate'));
//uninstall
register_uninstall_hook(__FILE__,array($customform,'uninstall'));

?>
 
 