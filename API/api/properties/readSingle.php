<?php

include_once '../../config/headers.php';

include_once '../../config/Database.php';
include_once '../../models/Property.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate Places data object
$data = new Property($db);

// Get ID
$myid = $_POST['id'];

// Get data
$data->getPlace($myid);

if ($data) {
    // $data_arr['status'] = 200;
    // $data_arr['data'] = $data;
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
} else {
    $data_arr = array(
        'status' => '404',
        'message' => 'No Place Found'
    );
}

// Make JSON
print_r($data_arr);
