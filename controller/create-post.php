<?php
     /* A requrie_once that calls for database.php to use. */
     require_once(__DIR__ . "/../model/database.php");
     /* A call for the variables titles host, username, password, and database */
     $connection = new mysqli($host, $username, $password, $database); 

  	 /* Variables that contain the information to recieve blog posts */
   	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
                 
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
/* Creates a connection to the query variable */  /* An action that inserts an object into "posts" */

   /* an if statement that echoes a line of text to confirm wether or not the $query works. Also has an else statement to echo if it doesn't work. */
    if ($query) {
      echo "<p>Successfully inserted post: $title</p>";
    } else {
      echo "<p>$connection->error</p>";
    }

   /*Closes the connection. */
   $connection->close();