<?php
class Property
{
	// DB stuff
	private $conn;
	private $table = 'place';

	// Post Properties
	public $id;
	public $userID;
	public $title;
	public $placeType;
	public $placeKind;
	public $dedicatedSpace;
	public $guests;
	public $bedrooms;
	public $bathrooms;
	public $description;
	public $sleepingarrangements;
	public $amenities;
	public $houserules;
	public $images;
	public $price;
	public $cleaningfee;
	public $servicefee;
	public $discount;
	public $state;
	public $city;
	public $address;
	public $latitude;
	public $longitude;
	public $available;
	public $placekind;
	public $placekindslug;
	public $property_type;
	public $property_type_slug;
	public $cityname;
	public $statename;
	public $hostname;
	public $hostid;
	public $hostimage;
	public $hostidentity;
	public $hostabout;
	public $hostlanguage;
	public $hostjoined;
	public $createdAt;
	public $updateAt;


	// Constructor with DB
	public function __construct($db)
	{
		$this->conn = $db;
	}

	// Get all places list
	public function getPlaces()
	{
		// Create query
		$query = 'SELECT
                  pk.title as placekind,
                  prt.title as property_type,
                  ct.name as cityname,
                  p.id,
                  p.title,
                  p.guests,
                  p.bedrooms, 
                  p.bathrooms, 
                  p.amenities, 
                  p.images,
                  p.discount,
                  p.price
                FROM ' . $this->table . ' p
                  INNER JOIN
                  place_kind pk ON p.placeKind = pk.id
                  INNER JOIN
                  property_type prt ON p.propertyType = prt.id
                  INNER JOIN
                  cities ct ON p.city = ct.id
                  WHERE p.available = 1
				  ORDER BY p.id DESC
				  LIMIT 6';

		// Prepare statement
		$stmt = $this->conn->prepare($query);

		// Execute query
		$stmt->execute();

		return $stmt;
	}

	// Get Single Place
	public function getPlace($myid)
	{
		// Create query
		$query = 'SELECT
                      pk.title as placekind,
                      pk.slug as placekindslug,
                      prt.title as property_type,
                      prt.slug as property_type_slug,
                      ct.name as cityname,
                      st.name as statename,
                      h.id as hostid,
                      h.firstName as hostname,
                      h.image as hostimage,
                      h.documentVerified as hostidentity,
                      h.about as hostabout,
                      h.languages as hostlanguage,
                      h.createdAt as hostjoined,
                      p.*
                    FROM ' . $this->table . ' p
					  INNER JOIN
					  place_kind pk ON p.placeKind = pk.id
					  INNER JOIN
					  property_type prt ON p.propertyType = prt.id
					  INNER JOIN
					  cities ct ON p.city = ct.id
					  INNER JOIN
					  states st ON p.state = st.id
					  INNER JOIN
					  users h ON p.userID = h.id
                    WHERE
                      p.id = '.$myid.'
                    LIMIT 0,1';

		// Prepare statement
		$stmt = $this->conn->prepare($query);

		// Execute query
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
		die();
		// Set properties
		$this->id = $row['id'];
		$this->userID = $row['userID'];
		$this->title = $row['title'];
		// $this->placeType = $row['placeType'];
		// $this->placeKind = $row['placeKind'];
		$this->dedicatedSpace = $row['dedicatedSpace'];
		$this->guests = $row['guests'];
		$this->bedrooms = $row['bedrooms'];
		$this->bathrooms = $row['bathrooms'];
		$this->description = $row['description'];
		$this->sleepingarrangements = $row['sleepingarrangements'];
		$this->amenities = $row['amenities'];
		$this->houserules = $row['houserules'];
		$this->images = $row['images'];
		$this->price = $row['price'];
		$this->cleaningfee = $row['cleaningfee'];
		$this->servicefee = $row['servicefee'];
		$this->discount = $row['discount'];
		// $this->state = $row['state'];
		// $this->city = $row['city'];
		$this->address = $row['address'];
		$this->latitude = $row['latitude'];
		$this->longitude = $row['longitude'];
		$this->available = $row['available'];
		$this->placekind = $row['placekind'];
		$this->placekindslug = $row['placekindslug'];
		$this->property_type = $row['property_type'];
		$this->property_type_slug = $row['property_type_slug'];
		$this->cityname = $row['cityname'];
		$this->statename = $row['statename'];
		$this->hostname = $row['hostname'];
		$this->hostid = $row['hostid'];
		$this->hostimage = $row['hostimage'];
		$this->hostidentity = $row['hostidentity'];
		$this->hostabout = $row['hostabout'];
		$this->hostlanguage = $row['hostlanguage'];
		$this->hostjoined = date('d M Y', strtotime($row['hostjoined']));
		$this->createdAt = date('d M Y', strtotime($row['createdAt']));
		// $this->updateAt = date('d M Y', strtotime($row['created_at']));
		
	}
}
