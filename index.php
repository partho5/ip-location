<?php

require_once 'config.php';
require_once 'IpFetcher.php';

$access_token = IPINFO_API_KEY; //defined in config.php
$ip_address = "8.8.8.8"; //ip address to lookup

$ipInfoFetcher = new IPInfoFetcher($access_token);
$response = $ipInfoFetcher->fetchIPInfo($ip_address);

header('Content-Type: application/json');
echo $response;


/*

if ($response !== false) {
    $data = json_decode($response);

    echo "IP: " . $data->ip . "<br>";
    echo "City: " . $data->city . "<br>";
    echo "Region: " . $data->region . "<br>";
    echo "Country: " . $data->country . "<br>";
    echo "Location: " . $data->loc . "<br>";
    echo "ISP: " . $data->org . "<br>";
    echo "Postal Code: " . $data->postal . "<br>";
    echo "Timezone: " . $data->timezone . "<br>";
} else {
    echo "Error: Unable to fetch data.";
}

*/
