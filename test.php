<?php 
	
	$client = new MongoDB\Driver\Manager("mongodb://localhost:27017");

	// $client = new MongoDB\Client("mongodb://localhost:27017");

	$stats = new MongoDB\Driver\Command(["dbstats" => 1]);

	$res = $client->executeCommand("test_db", $stats);

	$stats = current($res->toArray());

	print_r($stats);
	
	echo "<br>";

	$query = new MongoDB\Driver\Query([]);

	$rows = $client->executeQuery("test_db.posts", $query);

	foreach ($rows as $row) {

		echo $row->title ." : ". $row->body. "<br>";
	}
?>