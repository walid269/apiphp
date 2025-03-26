<?php
$number = $_GET['num']; // Get the number from the request
$amount = $_GET['amount']; // Get the amount from the request

// Call the first API
$api1_url = "http://mrn-bio.social-networking.me/cobraCll.php?num=" . $number;
$response1 = file_get_contents($api1_url);

// Call the second API
$api2_url = "https://yousuf323215.serv00.net/call90.php?number=" . $number;
$response2 = file_get_contents($api2_url);

// Call the third API (Bikroy Login API)
$api3_url = "https://bikroy.com/data/phone_number_login/verifications/phone_login?phone=" . $number;
$response3 = file_get_contents($api3_url);

// Combine the responses
$response = array(
    "api1_response" => json_decode($response1),
    "api2_response" => json_decode($response2),
    "api3_response" => json_decode($response3)
);

// Return the combined response as JSON
echo json_encode($response);
?>
