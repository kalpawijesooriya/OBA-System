<?php
require_once 'Member.php';

if( $_POST['method']=="register" ) {

     $member = new Member();
     $result = $member->saveMemberData($_POST['regestration_number'],$_POST['nic'],$_POST['title'],$_POST['name'],$_POST['birthday'],$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['mobile'],$_POST['email'],$_POST['index_num'],$_POST['ol_year'],$_POST['al_year'],$_POST['password']);
     echo $result;
}

?>