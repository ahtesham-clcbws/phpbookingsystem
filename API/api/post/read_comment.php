<?php 
  // Headers
  // header('Content-Type: application/json');
  // header('Access-Control-Allow-Origin: http://google.com');
  // header('Access-Control-Allow-Methods: GET, POST, PUT');
  // header('Access-Control-Allow-Headers: Content-Type');

  include_once '../../config/Database.php';
  include_once '../../models/Comments.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Comment($db);

  // Get ID
  $post->blog_id = isset($_GET['blog_id']) ? $_GET['blog_id'] : die();

  // Get post

  // Blog post query
  $result = $post->read_comment();
  
  // Get row count
  $num = $result->rowCount();


  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'id' => $id,
        'blogid' => $blog_id,
        'cid' => $comment_id,
        'author' => $author_name,
        'subject' => $subject,
        'email' => $author_email,
        'comment' => $comment_data,
        'cdate' => date('d M Y', strtotime($comment_date))
        
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('comment' => 'No Comments Found')
    );
  }
