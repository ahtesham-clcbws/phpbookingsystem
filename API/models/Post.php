<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'blog';

    // Post Properties
    public $id;
    public $status;
    public $category_id;
    public $category_name;
    public $title;
    public $slug;
    public $summary;
    public $source;
    public $image;
    public $post_author;
    public $date;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT
                  c.cat as category_name,
                  p.id, 
                  p.status, 
                  p.category_id,
                  p.title, 
                  p.slug, 
                  p.summary,
                  p.image,
                  p.post_author, 
                  p.created_at
                FROM ' . $this->table . ' p
                  LEFT JOIN
                  blog_cat c ON p.category_id = c.id
                  ORDER BY p.id DESC';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT c.cat as category_name, 
                      c.cat as category_name,
                      p.id, 
                      p.status, 
                      p.category_id,
                      p.title, 
                      p.slug, 
                      p.description, 
                      p.source,
                      p.image,
                      p.post_author, 
                      p.created_at
                    FROM ' . $this->table . ' p
                    LEFT JOIN
                      blog_cat c ON p.category_id = c.id
                    WHERE
                      p.slug = ?
                    LIMIT 0,1';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->slug);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->id = $row['id'];
          $this->title = $row['title'];
          $this->description = $row['description'];
          $this->image = $row['image'];
          $this->post_author = $row['post_author'];
          $this->category_name = $row['category_name'];
          $this->created_at = date('d M Y', strtotime($row['created_at']));
          
    }
    
  }