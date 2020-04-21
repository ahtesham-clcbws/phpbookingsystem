<?php 
  // Headers
  // header('Access-Control-Allow-Origin: *');
  // header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get ID
  $post->slug = isset($_GET['slug']) ? $_GET['slug'] : die();

  // Get post
  $post->read_single();

  // Create array
  $post_arr = array(
    'id' => $post->id,
    'name' => $post->title,
    'description' => $post->description,
    'image' => $post->image,
    'author' => $post->post_author,
    'category' => $post->category_name,
    'dated' => $post->created_at
        
  );

  // Make JSON
  print_r(json_encode($post_arr));