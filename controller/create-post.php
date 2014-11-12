<?php
     /* A requrie_once that calls for database.php to use. */
     require_once(__DIR__ . "/../model/database.php");
     /* A call for the variables titles host, username, password, and database */
     $connection = new mysqli($host, $username, $password, $database); 

  	 /* Variables that contain the information to recieve blog posts */
   	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   /* Echoes to call out the variables */
   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";
   /*Closes the connection. */
   $connection->close();