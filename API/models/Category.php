<?php
class Category
{
  // DB stuff
  private $conn;
  private $table = 'business_cat';

  // Post Properties
  public $id;
  public $parentID;
  public $name;
  public $slug;
  public $main;
  public $active;
  public $date;

  // Constructor with DB
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // Get Posts
  public function readALL()
  {
    // Create query
    $query = 'SELECT * FROM ' . $this->table . ' ORDER BY name ASC';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute query
    $stmt->execute();

    return $stmt;
  }

}
