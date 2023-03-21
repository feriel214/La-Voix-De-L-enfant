<?php
  require('C:\xampp\htdocs\voix_enfant\wordpress\wp-load.php');
  if(isset($_POST["nom"]) && isset($_POST["email"])) 
{   global $wpdb;

  $data_array = array(
   'email' => $_POST['email'],
   'nom' => $_POST['nom'],
   'objet' => $_POST['objet'],
   'message' => $_POST['message']
   
    
);
 $table_name ='contact';
  
  $success = $wpdb->insert($table_name, $data_array,$format=NULL);
if ($wpdb == 1) {
    return  json_encode(array('message'=> '<h1>form submit succefully in database</h1>','status' =>1));
}
else
{
   return  json_encode(array('message'=> '<h1>ERREUR form submission </h1>','status' =>0));
}}