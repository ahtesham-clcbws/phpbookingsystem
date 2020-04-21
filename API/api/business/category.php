<?php 

  require '../headers.php';

  include_once '../../config/Database.php';
  include_once '../../models/Category.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $data = new Category($db);

  // Blog post query
  $result = $data->readALL();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $data_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $data_item = array(
        'id' => $id,
        'parentID' => $parentID,
        'name' => $name,
        'slug' => $slug,
        'main' => $main,      
        'active' => $active,
      );
      // Push to "data"
      array_push($data_arr, $data_item);
      // array_push($posts_arr['data'], $post_item);
    }
    // Turn to JSON & output
    echo json_encode($data_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Categories Found')
    );
  }
