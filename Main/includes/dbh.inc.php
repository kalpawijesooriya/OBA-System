<?php
class Dbh{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

   protected function connect()
   { 
       $this->serverName="localhost";
       $this->userName="root";
       $this->password="";
       $this->dbName="obsystem_db";

      $conn=new mysqli($this->serverName, $this->userName,$this->password,$this->dbName);
     return $conn;
        
   }
}
?>