<?php
    require_once(__DIR__ . "/../model/database.php");

    $connection = new mysqli($host, $username, $password);

    if($connection->connect_error) {
        die("Error: " . $connection->connection_error);
    } 

    $exists = $connection->select_db($database);

    if (!$exists) {
    	$query = $connection->query("CREATE DATABASE $database");

    	if ($query) {
    		echo "Successfully created database:" . $database;
    	}
    }


     $connection->close();