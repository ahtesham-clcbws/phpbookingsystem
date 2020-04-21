<?php

$a = userLogin($_POST);
$json = json_decode($a);

if ($_POST['email'] == $json->email) {
    session_destroy();
    session_start();
    $_SESSION['login'] = $json->session;
    $_SESSION['loginid'] = $json->id;
    echo "<script>window.location='/';</script>";
} else {
    session_destroy();
    session_start();
    $_SESSION['login'] = 0;
    echo '<script>alert("Incorrect Email OR Password, Please Check your credentials and try again.")</script>';
    echo "<script>window.location='/';</script>";
}
