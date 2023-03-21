
<?php
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
 if($success == 1) {
		echo json_encode(array('message1' => '<h1>form submit success</h1>','status' => 1));


      } else {
		echo json_encode(array('message1' => '<h1>error</h1>','status' => 0));
   }
   die;
}