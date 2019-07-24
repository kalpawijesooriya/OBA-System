<?php
session_start();
include_once 'Member.php';

$action = $_REQUEST['action'];

switch ($action) {
    case "approveRegistration":
    approveRegistration();
    break;
}

function approveRegistration(){
    $regId = $_REQUEST['q'];
// echo "$regId"+"OOO";

    $event_obj = new Member();

    $result = $event_obj->approveRegistration($regId);
}
?>