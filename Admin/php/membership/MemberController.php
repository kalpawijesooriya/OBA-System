<?php
session_start();
include_once 'Member.php';
echo "aaa";
$action = $_REQUEST['action'];

switch ($action) {
    case "approveRegistration":
    approveRegistration();
    break;

    case "removeMember":
    removeMember();
    break;
}

function approveRegistration(){
    $regId = $_REQUEST['q'];

    $member = new Member();

    $result = $member->approveRegistration($regId);
}

function removeMember(){
    $regId = $_REQUEST['q'];

    $member = new Member();

    $result = $member->removeMember($regId);
}

?>