<?php

$limite_minimo = 0;
$limite_maximo = 12000;

inicio:

$url = $_UP['pasta'] . $nome_final;

$accountName = $_POST['accountname'];

$freightTableId = $_POST['freighttableid'];


$url_carrier = 'http://'. $accountName .'.vtexcommercestable.com.br/api/logistics/pvt/configuration/carriers/';

$url_freights = 'http://'. $accountName .'.vtexcommercestable.com.br/api/logistics/pvt/configuration/freights/'. $freightTableId .'/values/update';


$data_carrier = array(
    "id" => $freightTableId,
    "name" => $freightTableId,
    "slaType" => "Normal",
    "scheduledDelivery" => false,
    "maxRangeDelivery" => 0,
    "dayOfWeekForDelivery"=>null,
    "dayOfWeekBlockeds"=>[],
    "freightValue"=>[
    ],
    "factorCubicWeight"=>null,
    "freightTableProcessStatus"=>1,
    "freightTableValueError"=>null,
    "modals"=>[],
    "onlyItemsWithDefinedModal"=>false,
    "deliveryOnWeekends"=>false,
    "carrierSchedule"=>[],
    "maxDimension"=>[],
    "exclusiveToDeliveryPoints"=>false,
    "minimunCubicWeight"=>0.0,
    "isPolygon"=>false

);


if (($handle = fopen($url, 'r')) === false) {
    die('Error opening file, unable to upload file.');
}

$headers = fgetcsv($handle, 1024, ',');
$headers[] = 'operationType';
$headers[] = 'minimumValueInsurance';
$headers[] = 'restrictedFreights';
$linhas[] = array();

$num_linhas = 0;

while ($row = fgetcsv($handle, 1024, ',')) {
    if($num_linhas >= $limite_minimo && $num_linhas < $limite_maximo ){
        $row[] = "1";
        $row[] = "";
        $row[] = "";
        $linhas[] = array_combine($headers, $row);
    }
    $num_linhas ++;
    //echo $num_linhas."</br>";
}

fclose($handle);


$url_send_carrier = $url_carrier;
$str_data_carrier = json_encode($data_carrier);

$url_send_freights = $url_freights;
$str_data_freights = json_encode($linhas);

function sendPostData($url_ws, $post){
    $ch = curl_init($url_ws);
    $ID = $_POST['id'];
    $Key = $_POST['key'];
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

//echo "<div class='resultado1'>Finalizado cadastro da transportadora (" . sendPostData($url_send_carrier, $str_data_carrier).")</div>";

echo "<div class='resultado2'>Cadastrando os valores... " . sendPostData($url_send_freights, $str_data_freights) . "</div>";

echo "Linhas entre " . $limite_minimo . " e " .  $limite_maximo . "</br></br>";
echo $num_linhas . " Linhas</br>";

$limite_minimo = $limite_minimo+12000;
$limite_maximo = $limite_maximo+12000;

if($limite_maximo <= $num_linhas){
    unset($linhas);
    goto inicio;
}
?>