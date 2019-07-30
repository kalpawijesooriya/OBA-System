<?php
require_once 'Member.php';


if($_POST['method']=="getRegisteredMembers" ) {
     $member = new Member();
     $result = $member->getRegesteredMembers();
}
else if(!empty($_POST['nic']) || !empty($_POST['title'])|| !empty($_POST['name'])|| !empty($_POST['phone'])|| !empty($_POST['birthday'])|| !empty($_POST['country'])|| !empty($_POST['address'])|| !empty($_POST['mobile'])|| !empty($_POST['index_num'])|| !empty($_POST['ol_year'])|| !empty($_POST['al_year'])|| !empty($_POST['password'])){
    $registrationNumber= substr_replace($_POST['nic'] ,"",-1);
    $bddate = explode(" / ", $_POST['birthday']);
    $birthday=$bddate[2].'-'.$bddate[1].'-'.$bddate[0];
    $member = new Member();
    $imgLocation="";
     if( !empty($_FILES['file']['name']))
     {
        $imgLocation=$_FILES['file']['name'];
     }
    $result = $member->saveMemberData($registrationNumber,$_POST['nic'],$_POST['title'],$_POST['name'], $birthday,$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['mobile'],$_POST['email'],$_POST['index_num'],$_POST['ol_year'],$_POST['al_year'],$_POST['password'], $imgLocation);
    echo  $result;   
}

?>