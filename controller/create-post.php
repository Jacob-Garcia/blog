<?php
     /* A requrie_once that calls for database.php to use. */
     require_once(__DIR__ . "/../model/config.php");
  	 /* Variables that contain the information to recieve blog posts */
   	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DateTime('today');
    $time = new DateTime('America/Los_Angeles');

    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
/* Creates a connection to the query variable */  /* An action that inserts an object into "posts" */

   /* an if statement that echoes a line of text to confirm wether or not the $query works. Also has an else statement to echo if it doesn't work. */
    if ($query) {
      echo "<p>Successfully inserted post: $title</p>";
      echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");
    } 
     else {
      echo "<p>$connection->error</p>";
    }