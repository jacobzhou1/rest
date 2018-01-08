<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// $location = $_GET['q'];
// $key = $_GET['appid'];

$json = file_get_contents("./cities.json");

echo json_encode($json);


?>