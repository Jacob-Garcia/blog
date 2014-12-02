<?php
    require_once(__DIR__ . "/../model/config.php");
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