<?php
    require_once(__DIR__ . "/database.php");
    session_start();

    /*A variable that uses "/blog/" as its source */
    $path = "/blog/";
      /* Variables that define several things used in the blog project */
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db"; 

    if (!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
?>