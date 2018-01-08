<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// $location = $_GET['q'];
// $key = $_GET['appid'];

$data = array(
	"main" => array(
		"temp" => 283,
		"pressure" => 1000,
		"humidity" => 70
	)
);

echo json_encode($data);


?>