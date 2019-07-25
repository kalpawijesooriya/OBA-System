<?php

$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = "b3ddc9c03fcdea";
$password = "c72fb202";
$db = "heroku_c89e249aac6f9c4";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
//Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
?>  

<?php

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