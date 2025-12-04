<?php
<<<<<<< HEAD
// Retrieve database credentials from Render Environment Variables
// These variables must be set on the Render Web Service dashboard!

// DB_HOST must be the internal hostname of your Render MySQL service (e.g., mysql-XXXX.render-internal.com)
$host = getenv('DB_HOST'); 
$user = getenv('DB_USER'); // e.g., your_mysql_username
$pass = getenv('DB_PASS'); // e.g., your_mysql_password
$dbname = getenv('DB_NAME'); // e.g., kintosh_laundry

// Fallback for local testing (optional, remove for production security)
if (!$host) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "kintosh_laundry";
}

// Attempt to connect using the fetched environment variables
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    // Log the error message to help with debugging on Render logs
    error_log("Database Connection Failed: " . $conn->connect_error);
    die("Database Connection Failed: Please check host and credentials.");
=======
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$dbname = getenv("DB_NAME");
$port = getenv("DB_PORT");

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
>>>>>>> 73f58ec (Fix DB connection: handle empty DB_PORT and log errors)
}
?>

