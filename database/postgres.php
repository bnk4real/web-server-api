<?php
    $host = "rosie.db.elephantsql.com";
	$port = "5432"; 
	$dbname = "hkyojkex";
	$user = "hkyojkex";
	$password = "6rjF8BGb_UThGPW06H7Bp7PxMjeFNDUL";
	
	// Connect to the PostgreSQL database
	$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
	
	if (!$conn) {
	    die("Connection failed: " . pg_last_error());
	}
    // echo "Connected successfully"; // test connection
?>