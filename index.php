<?php
	
	require_once 'vendor/autoload.php';
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->testing_db;
	
   echo "Database mydb selected";

?>