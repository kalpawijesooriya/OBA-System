<?php
//kalpa connection
class Dbh{
    
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

   protected function connect()
   { 
       $this->serverName="us-cdbr-iron-east-02.cleardb.net";
       $this->userName="b3ddc9c03fcdea";
       $this->password="c72fb202";
       $this->dbName="heroku_c89e249aac6f9c4";

      $conn=new mysqli($this->serverName, $this->userName,$this->password,$this->dbName);
      return $conn;
        
   }
}
?>