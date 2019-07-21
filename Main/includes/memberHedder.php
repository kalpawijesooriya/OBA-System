<?php
require_once 'Member.php';

if( $_POST['method']=="register" ) {

     $member = new Member();
     $result = $member->saveMemberData($_POST['name'],$email = $_POST['email'],$password = $_POST['password'],$_POST['contact']);
     echo $result;
}

?>