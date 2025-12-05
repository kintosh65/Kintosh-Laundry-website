<?php
require "database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

// 1. RETRIEVE ALL FIELDS
$name     = $_POST["name"];
$email    = $_POST["email"];
$phone    = $_POST["phone"]; // <--- NEW FIELD
$service  = $_POST["service"];
$pick_up   = $_POST["pick_up"];
$location = $_POST["location"];
$message  = $_POST["message"];

// Include 'phone' in the validation check
if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($pick_up) || empty($location)) {
    die("Please fill in all required fields.");
}

//  DATABASE INSERT QUERY


$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, service, pick_up, location, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $email, $phone, $service, $pick_up, $location, $message);
$stmt->execute();
$stmt->close();

// 3. UPDATE THE EMAIL BODY

$to = "samuelmuraya15465@gmail.com";
$subject = "New Laundry Booking from $name";
$body = "
Name: $name
Email: $email
Phone: $phone
Service: $service
Pickup: $pick_up
Location: $location
Message: $message
";

mail($to, $subject, $body);

header("Location: thank_you.php");
exit;
?>
