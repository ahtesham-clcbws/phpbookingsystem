<?php

include_once '../../config/headers.php';

include_once '../../config/Database.php';
include_once '../../models/Property.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate Places data object
$data = new Property($db);

// Places List data query
$result = $data->getPlaces();
// Get row count

$num = $result->rowCount();
// Check if any datas
if ($num > 0) {

	$row = $result->fetchall(PDO::FETCH_ASSOC);
	// Turn to JSON & output
	echo json_encode($row);
} else {
	// No datas
	echo json_encode(
		array(
			'status' => '404',
			'message' => 'No Places Found'
		)
	);
}
