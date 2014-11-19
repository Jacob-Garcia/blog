<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $connection = new mysqli($host, $username, $password);
/* An if statement that kills the code if there is a connection error */
    if($connection->connect_error) {
        die("<p>Error: " . $connection->connection_error . "</p>");
    } 
    
    $exists = $connection->select_db($database);
    /* An if statement that commands the creation of the database */
    if (!$exists) {
    	$query = $connection->query("CREATE DATABASE $database");
    /* An if statement that echoes the creation of the database, now rendered useless */
    	if ($query) {
    		echo "<p>Successfully created database: " . $database . "</p>";
    	}
    }
    /* An else statement that echoes the existing database */
    else {
    	echo "Database already exists.";
    }

     /* This is a creation of the table posts */
    $query = $connection->query("CREATE TABLE posts ("
    	. "id int(11) NOT NULL AUTO_INCREMENT,"
    	. "title varchar(255) NOT NULL,"
    	. "post text NOT NULL,"
    	. "PRIMARY KEY (id))");
    /* an if statement that echoes the creation of the table: posts. It is not echoing but the tables appear in my myPHPAdmin. */
      if ($query) {
      	echo "<p>Successfully created table: posts</p>";
      }
      else {
      	echo "<p>$connection->error</p>";
      }
     /* Closes the connection */
     $connection->close();