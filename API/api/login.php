<?php
require 'headers.php';

include_once '../config/Database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$email = $_POST['email'];
$pass = md5($_POST['pass']);
$data = $db->prepare("SELECT id,emailID FROM users WHERE emailID='{$email}' AND passwordHASH='{$pass}' ");
$data->execute();
$result = $data->fetchAll(PDO::FETCH_OBJ);

if($result == true){
    $array['id'] = $result[0]->id;
    $array['email'] = $result[0]->emailID;
    $array['session'] = 1;
    $date = date("Y-m-d H:i:s");
    $set = $db->prepare("UPDATE users SET lastLogin='{$date}' WHERE id='{$array['id']}'");
    $set->execute();
    echo json_encode($array);
}else{
    echo json_encode(['status'=>401,'message'=>'There is some problem in your query.']);
}


function afterLogin()
{
    $request = date("Y-m-d H:i:s");
    $db = $this->pdo->prepare("UPDATE users SET lastLogin='{$request}'");
    $db->execute();
}