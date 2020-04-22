<?php

include_once '../../config/headers.php';

include_once '../../config/Database.php';
include_once '../../models/Property.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate Places data object
$data = new Property($db);

if (isset($_GET['id'])) {

	// Get ID
	$data->id = $_GET['id'];

	// Get data
	$data->getPlace();

	if($data->id){
		// Create array
		$data_arr = array(
			'status' => '200',
			'id' => $data->id,
			'userID' => $data->userID,
			'title' => $data->title,
			'dedicatedSpace' => $data->dedicatedSpace,
			'guests' => $data->guests,
			'bedrooms' => $data->bedrooms,
			'bathrooms' => $data->bathrooms,
			'description' => $data->description,
			'sleepingarrangements' => $data->sleepingarrangements,
			'amenities' => $data->amenities,
			'houserules' => $data->houserules,
			'images' => $data->images,
			'price' => $data->price,
			'cleaningfee' => $data->cleaningfee,
			'servicefee' => $data->servicefee,
			'discount' => $data->discount,
			'address' => $data->address,
			'latitude' => $data->latitude,
			'longitude' => $data->longitude,
			'available' => $data->available,
			'placekind' => $data->placekind,
			'placekindslug' => $data->placekindslug,
			'property_type' => $data->property_type,
			'property_type_slug' => $data->property_type_slug,
			'cityname' => $data->cityname,
			'statename' => $data->statename,
			'hostname' => $data->hostname,
			'hostid' => $data->hostid,
			'hostimage' => $data->hostimage,
			'hostidentity' => $data->hostidentity,
			'hostabout' => $data->hostabout,
			'hostlanguage' => $data->hostlanguage,
			'hostjoined' => $data->hostjoined,
			'createdAt' => $data->createdAt
		);
	}else{
		$data_arr = array(
			'status' => '404',
			'message' => 'No Place Found'
		);
	}

	// Make JSON
	print_r(json_encode($data_arr));

} else {

	// Places List data query
	$result = $data->getPlaces();
	// Get row count
	
	$num = $result->rowCount();
	// Check if any datas
	if ($num > 0) {
		// data array
		$data_arr = array();
		// $datas_arr['data'] = array();

		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			extract($row);

			$data_item = array(
				'id' => $id,
				'name' => $title,
				'images' => json_encode($images),
				'guests' => $guests,
				'bedrooms' => $bedrooms,
				'bathrooms' => $bathrooms,
				'amenities' => json_encode($amenities),
				'price' => $price,
				'cityname' => $cityname,
				'placekind' => $placekind,
				'property_type' => $property_type,
				'discount' => $discount
			);
			// Push to "data"
			array_push($data_arr, $data_item);
			// array_push($datas_arr['data'], $data_item); // If you need to get some other arrays to push in single query use thos array push with array names.
		}
		// Turn to JSON & output
		echo json_encode($data_arr);
	} else {
		// No datas
		echo json_encode(
			array(
				'status' => '404',
				'message' => 'No Places Found'
				)
		);
	}
}
