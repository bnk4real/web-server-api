<?php

$request_uri = $_SERVER['REQUEST_URI'];

if (strpos($request_uri, '/api/get-test') === 0) {
    include 'api/get-test.php';
} elseif (strpos($request_uri, '/api/greet') === 0) {
    include 'api/greet.php';
} else {
    http_response_code(404);
    echo "Not Found";
}

?>