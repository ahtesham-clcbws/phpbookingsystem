<?php
require '../headers.php';

include_once '../../config/Database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

if ($_POST) {
  $get = $_POST;
} elseif ($_GET) {
  $get = $_GET;
}

@$query = $get['q'];
@$category = $get['c'];
@$rating = $get['r'];
@$latitude = $get['lat'];
@$longitude = $get['long'];
@$page = $get['p'];
@$limit = $get['limit'];

if (isset($get['p'])) {
  $page = $get['p'];
  $start = ($page - 1) * $limit;
} else {
  $start = 0;
}

$queryData = "SELECT * FROM business WHERE verified = 1 ";
// $link = '';

if (isset($get["q"]) && !empty($get["q"])) {
  $queryData .= "AND title LIKE '%" . $get["q"] . "%'";
  // $link .= "&q=" . $get["q"] . "";
}
// for category
if (isset($get["c"]) && !empty($get["c"])) {
  $queryData .= " AND catID = " . $get["c"] . "";
  // $link .= "&c=" . $get["c"] . "";
}
// for rating
if (isset($get["rating"]) && !empty($get["rating"])) {
  $queryData .= " AND rating = " . $get["rating"] . "";
  // $link .= "&rating=" . $get["rating"] . "";
}
// for Latitude
if (isset($get["lat"]) && !empty($get["lat"])) {
  $queryData .= " AND latitude = " . $get["lat"] . "";
  // $link .= "&lat=" . $get["lat"] . "";
}
// for Longitude
if (isset($get["long"]) && !empty($get["long"])) {
  $queryData .= " AND longitude = " . $get["long"] . "";
  // $link .= "&long=" . $get["long"] . "";
}
$queryData .= " ORDER BY id DESC";

//get data of rows
$query = $db->prepare($queryData);
$query->execute();
$total_rows = $query->rowCount($queryData);

// for limit
if (isset($get["limit"]) && !empty($get["limit"])) {
  $limit = $get["limit"];
  // $link .= "&limit=" . $get["limit"] . "";
}else{
  $limit = 10;
}
$queryData2 = " LIMIT $start, $limit";
$result = $db->prepare($queryData . $queryData2);
$result->execute();
$data = $result->fetchall(PDO::FETCH_ASSOC);


if($data == true) {
  if(isset($get)){
    $array['query'] = $get;
  }
  // $array['page'] = $page;
  // $array['limit'] = $limit;
  $array['totalrows'] = $total_rows;
  // $array['link'] = $link;
  $array['data'] = $data;
}else{
  $array['message'] = "Data Not Found";
}
// return $array;

echo json_encode($array);