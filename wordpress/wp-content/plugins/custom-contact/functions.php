
<?php
 if(isset($_POST["nom"]) && isset($_POST["email"])) 
{
 global $wpdb;
 $data_array = array(
   'email' => $_POST['email'],
   'nom' => $_POST['nom'],
   'objet' => $_POST['objet'],
   'message' => $_POST['message']
    
);
 $table_name ='contact';
  
  $success = $wpdb->insert($table_name, $data_array);
 if($success == 1) {
		echo 'Message is Saved!';
;

      } else {
  echo 'non';
   }
   die;
}