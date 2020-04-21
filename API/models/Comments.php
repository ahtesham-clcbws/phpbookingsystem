<?php 
  class Comment {
    // DB stuff
    private $conn;
    private $table = 'blog_comments';

    // Post Properties
    public $id;
    public $blog_id;
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
          $query = 'SELECT c.id,c.blog_id,c.comment_id,c.author_name,c.author_email,c.subject,c.comment_data,c.comment_date,c.status
                    FROM ' . $this->table . ' c LEFT JOIN blog b ON b.id = c.blog_id 
                    WHERE c.status = 1 AND c.blog_id = ? ORDER BY c.id DESC';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->blog_id);

          // Execute query
          $stmt->execute();

          return $stmt;
          
        }
  }
