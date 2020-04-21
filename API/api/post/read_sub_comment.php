<?php 
  // Headers
  // header('Content-Type: application/json');
  // header('Access-Control-Allow-Origin: http://google.com');
  // header('Access-Control-Allow-Methods: GET, POST, PUT');
  // header('Access-Control-Allow-Headers: Content-Type');

  include_once '../../config/Database.php';
  include_once '../../models/SubComments.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new SubComment($db);

  // Get ID
  $post->comment_id = isset($_GET['comment_id']) ? $_GET['comment_id'] : die();

  // Blog post query
  $result = $post->read_comment();
  
  // Get row count
  $num = $result->rowCount();


  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data3'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'id' => $id,
        'cid' => $comment_id,
        'author' => $author_name,
        'subject' => $subject,
        'email' => $author_email,
        'comment' => $comment_data,
        'cdate' => date('d M Y', strtotime($comment_date))
        
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data3'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  }