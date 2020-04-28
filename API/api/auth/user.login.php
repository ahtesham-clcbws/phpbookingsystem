<?php
require '../../config/headers.php';

include_once '../../config/Database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$email = $_POST['loginemail'];
$pass = md5($_POST['loginpassword']);

// echo $pass;
// die();

$data = $db->prepare("SELECT id,isHost,email,firstName,emailVerify,mobileVerify FROM users WHERE email='{$email}' AND pass='{$pass}'");
$data->execute();
$result = $data->fetchAll(PDO::FETCH_OBJ);

if($result == true){
    $array['status'] = 200;
    $array['userid'] = $result[0]->id;
    $array['isHost'] = $result[0]->isHost;
    $array['email'] = $result[0]->email;
    $array['firstName'] = $result[0]->firstName;
    $array['emailVerify'] = $result[0]->emailVerify;
    $array['mobileVerify'] = $result[0]->mobileVerify;
    $date = date("Y-m-d H:i:s");
    $set = $db->prepare("UPDATE users SET lastLogin='{$date}' WHERE id='{$array['userid']}'");
    $set->execute();
    echo json_encode($array);
}elseif($data->rowCount() == 0){
    echo json_encode(['status'=>404,'message'=>'Email & password not found']);
}else{
    echo json_encode(['status'=>401,'message'=>'There is some problem in your query.']);
}
