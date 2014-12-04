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
  	    $this->connection = new mysqli($host, $username, $password);
		/* An if statement that kills the code if there is a connection error */
    		if($this->connection->connect_error) {
          die("<p>Error: " . $this->connection->connection_error . "</p>");
    } 
    	$exists = $this->connection->select_db($database);
    /* An if statement that commands the creation of the database */
    		if (!$exists) {
    	$query = $this->connection->query("CREATE DATABASE $database");
    /* An if statement that echoes the creation of the database, now rendered useless */
    		if ($query) {
    			echo "<p>Successfully created database: " . $database . "</p>";
    		}
    }
    /* An else statement that echoes the existing database */
    	else {
    		echo "Database already exists.";
    }
       }
  	 	public function openConnection() {
            /* Opens the connection to host, username, password, and database. */

            /* A connection function that does what the above comment says, and an if statement that says if there is a connection error, kill the connection, */
             $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

             if($this->connection->connect_error) {
                die("<p>Error: " . $connection->connection_error . "</p>");
            }
    } 
    

  	 public function closeConnection() {
            /* Closes the connection. */
            if (isset($this->connection)) {
            	 $this->connection->close();
            	 /*An if statement that says if the connection is set already, then close it. */
            }
  	 }

  	 public function query($string){
           /* A function that uses the variable "$string". */

           /* Opens the connection to "$this" */
           $this->openConnection();
           /* The variable "$query" is used to use to variable "$this" to create a connection to the "$string" */
           $query = $this->connection->query($string);
           /* Closes connection to "$this" */
           $this->closeConnection();
           /* Returns the "$query" variable. */
           return $query;
  	 }

  }