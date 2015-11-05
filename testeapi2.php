<?php
$applicationID = "";
$applicationKey = "";

// Set the request URL
$url = 'http://lojadosuporte.vtexcommercebeta.com.br/api/logistics/pvt/configuration/carriers/1';

// Set the HTTP request authentication headers
$headers = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-VTEX-API-AppKey: " . $applicationID . "\r\n" .
        "X-VTEX-API-AppToken: " . $applicationKey . "\r\n" .
        "DecibelTimestamp: " . date('Ymd H:i:s', time()) . "\r\n"
    )
);

// Creates a stream context
$context = stream_context_create($headers);

// Open the URL with the HTTP headers (fopen wrappers must be enabled)
$response = file_get_contents($url, false, $context);
echo $response;
?>
