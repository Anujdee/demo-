<?php
$ip = $_SERVER['REMOTE_ADDR'];

// Local testing case – agar localhost ho to India IP set karo
if ($ip == '127.0.0.1' || $ip == '::1') {
    $ip = '103.159.47.58'; // India ka example IP
}

// IP API call
$locationData = @unserialize(file_get_contents("http://ip-api.com/php/{$ip}"));

$currency = "USD"; // Default currency

if ($locationData && isset($locationData['countryCode'])) {
    if ($locationData['countryCode'] === "IN") {
        $currency = "INR";
    }
}
?>
