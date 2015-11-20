<?php
// Set the request URL
//$sellerId = $_POST["sellerid"];
//$sellerSku = $_POST["sellersku"];

$sellerId = "222";
$sellerSku = "12937";

$url = 'https://api-mp.walmart.com.br/ws/seller/222/catalog/offers/external/12937';
// Set the HTTP request authentication headers
$headers = array(
    'http' => array(
        'method' => "GET",
        'header' => "Content-Type: " . " application/json" . "\r\n"
));
//Creates a stream context
$context = stream_context_create($headers);
// Open the URL with the HTTP headers (fopen wrappers must be enabled)
$response = file_get_contents($url, false, $context);
echo $response;
?>
