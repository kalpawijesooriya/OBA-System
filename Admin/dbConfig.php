<?php
   //database configuration
   $dbHost = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "oba";

   //create db connection
   $dbConnection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //check connection
    if($dbConnection->connect_error){
        die("Connection Failed: ". $dbConnection -> connect_error);
    }
?>