<?php

$data = searchPlace($_GET, $api);

// $persons = json_encode($data['persons']);
// print_r($persons);
// echo $data['persons']["'adults'"];


print_r($data);

die();




// if(isset($_GET)){
//     $data['list'] = json_decode(searchList($_GET));
// }elseif(isset($_POST)){
//     $data['list'] = json_decode(searchList($_POST));
// }else{
//     $data['list'] = json_decode(searchList(''));
// }

// $data['category'] = json_decode(categoryList());

// print_r($data['list']->data);
// die();

// require 'views/global/header.view.php';
// require 'views/pages/search.view.php';
// require 'views/global/footer.view.php';
