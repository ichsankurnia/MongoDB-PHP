<?php
	// $client = new MongoDB\Client('mongodb+srv://ichsankurnia:ichsan14@testcluster1-hi7ql.mongodb.net/test?retryWrites=true&w=majority');
	require_once 'vendor/autoload.php';

	$client = new MongoDB\Client("mongodb://localhost:27017/");
	// $client = new MongoDB\Driver\Manager('mongodb://localhost:27017/');
	// $client = new MongoClient("mongodb://localhost:27017/");
	
	echo "Connection to database successfully<br>";
   	// select a database
   	$db = $client->testing_db;
	
   	echo "Database test selected<br>";

   	// $collection = $db->createCollection("test_col");
   	$collection = $db->collection1;
   	echo "Collection created succsessfully<br>";

   	$document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by" => "tutorials point"
	);

   	// insertMany()
	$collection->insertOne($document);
	echo "Document inserted successfully";
?>