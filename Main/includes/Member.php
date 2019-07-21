<?php

class Member extends Dbh{
    function saveMemberData($name,$email,$password,$contact){
  

        // $query = "INSERT INTO member (name, email_address,password,mobile_number) VALUES ($name, $email, $password,$contact)";

        // $this->connect()->query($query);
    
        return "Form Submitted succesfully";
    }
}
    
?>