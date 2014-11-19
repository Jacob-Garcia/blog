<?php
    /*A variable that uses "/blog/" as its source */
    $path = "/blog/";
      /* Variables that define several things used in the blog project */
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db"; 
      /* This new variable is used to hold the Database information. */
    $connection = new Database($host, $username, $password, $database);
?>