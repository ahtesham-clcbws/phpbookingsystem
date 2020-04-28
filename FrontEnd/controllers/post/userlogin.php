<?php

$a = userLogin($api, $_POST);
$json = json_decode($a);

if ($_POST['loginemail'] == $json->email) {
    session_destroy();
    session_start();
    $_SESSION['login'] = 1;
    $_SESSION['userid'] = $json->userid;
    $_SESSION['isHost'] = $json->isHost;
    $_SESSION['email'] = $json->email;
    $_SESSION['firstName'] = $json->firstName;
    $_SESSION['emailVerify'] = $json->emailVerify;
    $_SESSION['mobileVerify'] = $json->mobileVerify;
    echo "<script>window.location='/';</script>";
} else {
    session_destroy();
    session_start();
    $_SESSION['login'] = 0;
    echo '<script>alert("Incorrect Email OR Password, Please Check your credentials and try again.")</script>';
    echo "<script>window.location='/';</script>";
}
