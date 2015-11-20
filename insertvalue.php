<?php

$tableId = "1";
//next example will insert new conversation
$url = 'http://lojadosuporte.vtexcommercestable.com.br/api/logistics/pvt/configuration/freights/1/values/update';

$data = array(
[
   "zipCodeStart"=> 30000001,
   "zipCodeEnd"=> 40000000,
   "weightStart"=> 0,
   "weightEnd"=> 7,
   "absoluteMoneyCost"=> 5,
   "pricePercent"=> 0,
   "pricePercentByWeight"=> 0,
   "maxVolume"=> 1000000000,
   "timeCost"=> "2.00:00:00",
   "country"=> "BRA",
   "operationType"=> 1,
   "restrictedFreights"=> [ ]
]);

$url_send = $url;
$str_data = json_encode($data);

function sendPostData($url, $post){
    $ch = curl_init($url);
    $ID = "";
    $Key = "";
    $headers= array('Content-Type: application/json','X-VTEX-API-AppKey:'.$ID.'', 'X-VTEX-API-AppToken:'.$Key);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);  // Seems like good practice
    return $result;
}

echo " " . sendPostData($url_send, $str_data);

?>
