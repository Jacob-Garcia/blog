<?php
 /* This class was created so it would be easier to call
     all the variables at once, rather than calling them one by one.
     Also, it would be neater and less confusing when referencing
     to a single class. This class is used to confine the giant block of code
     within a single Class so it can be referenced as a single object.*/
  class Database {
  	 private $connection;
  	 private $host;
  	 private $username;
  	 private $password;
  	 private $database;

  	 public function __construct($host, $username, $password, $database) {
            $this->host = $host; /* This is accessing the $host variable, and the rest are accessing the other variables. */
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
  	 }

  	 public function openConnection() {
            /* Opens the connection to a place that has not been set. */
  	 }

  	 public function closeConnection() {
            /* Closes the connection to aformentioned "unset" place. */
  	 }

  	 public function query($string){
           /* A fucntion that uses a $string. */
  	 }

  }