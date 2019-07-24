<?php
// require_once '../conn.php';

class Member extends Dbh{
    function saveMemberData($regestration_number,$nic,$title,$name,$birthday,$address,$country,$phone,$mobile,$email,$index_num,$ol_year,$al_year,$password){
  

       $query ="INSERT INTO member (regestration_number,nic_num,title,name,birthday,address,country,phone_number,mobile_number,email_address,index_number,olevel_year,alevel_year,password) VALUES ('$regestration_number','$nic','$title','$name','$birthday','$address','$country',$phone,$mobile,'$email','$index_num',$ol_year,$al_year,'$password')";
       //"INSERT INTO member (nic_num,title,name,birthday,address,country,phone_number,mobile_number,email_address,index_number,olevel_year,alevel_year,password) VALUES ('98658541v','Mr','lslsns',22/12/1996,'sssss','SL',785,78,'ddddd','115',2005,2001,'wwww')";
    

       $result =$this->connect()->query($query);
    
        return $result;
    }

    function getPendingMembers(){
        $query ="SELECT * FROM member WHERE status='Pending'";
        $result =$this->connect()->query($query);   
        return $result;
    }

    function getRegisteredMembers(){
        $query ="SELECT * FROM member WHERE status='Registered'";
        $result =$this->connect()->query($query);   
        return $result;
    }
    function approveRegistration(){
        $regId = $_REQUEST['q'];
        $query ="UPDATE member SET status='Registered' WHERE regestration_number='$regId'";
        $result =$this->connect()->query($query);   
        echo "Done";
    }

}





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