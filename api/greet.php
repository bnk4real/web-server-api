<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
echo json_encode(["message" => "Hello, $name!"]);

?>