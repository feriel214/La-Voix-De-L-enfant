<?php
  require('C:\xampp\htdocs\voix_enfant\wordpress\wp-load.php');

 global $wpdb;
 $results = $wpdb->get_results("select * from contact");
 echo json_encode($results);