<?php
class Business
{
  // DB stuff
  private $conn;
  private $table = 'business';

  // Post Properties
  public $id;
  public $userID;
  public $verified;
  public $catid;
  public $category;
  public $catslug;
  public $title;
  public $slug;
  public $description;
  public $image;
  public $contactPhone;
  public $contactEmail;
  public $street1;
  public $street2;
  public $city;
  public $state;
  public $country;
  public $stateCode;
  public $countryCode;
  public $registeredAT;
  public $updatedAT;

  // Constructor with DB
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // Get Posts
  public function read()
  {
    // Create query
    $query = 'SELECT
                  c.name as category,
                  c.slug as catslug,
                  p.id, 
                  p.userID, 
                  p.verified,
                  p.title, 
                  p.slug, 
                  p.description, 
                  p.image,
                  p.contactPhone, 
                  p.contactEmail, 
                  p.street1, 
                  p.street2, 
                  p.registeredAT, 
                  p.updatedAT
                FROM ' . $this->table . ' p
                  LEFT JOIN
                  business_cat c ON p.catID = c.id
                  ORDER BY p.id DESC';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute query
    $stmt->execute();

    return $stmt;
  }

  // Get Single Post
  public function read_single()
  {
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

  public function search($get)
  {
    // Create query
    $query = 'SELECT
                  c.name as category,
                  c.slug as catslug,
                  p.id, 
                  p.userID, 
                  p.verified,
                  p.title, 
                  p.slug, 
                  p.description, 
                  p.image,
                  p.contactPhone, 
                  p.contactEmail, 
                  p.street1, 
                  p.street2, 
                  p.registeredAT, 
                  p.updatedAT
                FROM ' . $this->table . ' p
                  LEFT JOIN
                  business_cat c ON p.catID = c.id
                  WHERE p.catID = '.$get["catid"].'';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute query
    $stmt->execute();

    return $stmt;
  }
}
