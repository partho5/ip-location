<?php

class IPInfoFetcher {
    private $access_token;

    public function __construct($access_token) {
        $this->access_token = $access_token;
    }

    public function fetchIPInfo($ip_address) {
        $start_time = microtime(true); // Record start time

        $url = "http://ipinfo.io/{$ip_address}?token={$this->access_token}";
        $response = file_get_contents($url);

        $end_time = microtime(true); // Record end time
        $response_time = $end_time - $start_time; // Calculate response time

        $ip_info = json_decode($response, true);
        $ip_info['response_time'] = $response_time; // Add response time to the JSON

        return json_encode($ip_info, JSON_PRETTY_PRINT);
    }
}