<?php 
  class SubComment {
    // DB stuff
    private $conn;
    private $table = 'blog_comments';

    // Post Properties
    public $id;
    public $comment_id;
    public $author_name;
    public $author_email;
    public $subject;
    public $comment_data;
    public $comment_date;
    public $status;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Single Comment
    public function read_comment() {
          // Create query
          $query = 'SELECT * FROM ' . $this->table . ' WHERE status = 1 AND comment_id = ? ORDER BY id DESC';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->comment_id);

          // Execute query
          $stmt->execute();

          return $stmt;
          
        }
  }
