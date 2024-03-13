<?php

include '../database/postgres.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET");

$sql = "SELECT * FROM tb_customers";
$result = pg_query($conn, $sql);

$data = array();

while ($row = pg_fetch_assoc($result)) {
    $data = [
        $data[] = $row
    ];
}

echo json_encode($data);

?>