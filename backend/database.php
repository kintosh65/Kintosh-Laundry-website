<?php

$host   = getenv("DB_HOST");
$user   = getenv("DB_USER");
$pass   = getenv("DB_PASS");
$dbname = getenv("DB_NAME");
$port   = getenv("DB_PORT");

// Use numeric port only when provided
if ($port !== false && $port !== '' && is_numeric($port)) {
    $conn = new mysqli($host, $user, $pass, $dbname, (int)$port);
} else {
    $conn = new mysqli($host, $user, $pass, $dbname);
}

if ($conn->connect_error) {
    // log the error instead of outputting it (prevents "headers already sent")
    error_log("DB connection failed: " . $conn->connect_error);
    http_response_code(500);
    exit;
}

// no closing PHP tag


