<?php

$url = $_UP['pasta'] . $nome_final;

$applicationID = $_POST['accountid'];
$applicationKey = $_POST['accountkey'];
$warehouse = $_POST['warehouse'];

$planilha = $url;
if (($handle = fopen($planilha, 'r')) === false) {
    die('Error opening file');
}

$i = 1;

while ($row = fgetcsv($handle, 1024, ',')) {

    if($row[0] != "" && $row[1] != "" && $row[2] != ""){
		
		$sku = null;
		$price = null;
		
		echo $i." Atualizando item ".$row[0]."\n";

        $price = str_replace("R$", "", $row[1]);
        $price = str_replace(",", ".", $price);

        $sku = GetSkuId($row[0],$applicationID,$applicationKey);
		
        SavePrice($sku,$price,$applicationID,$applicationKey);
		
        SaveStock($sku,$row[2],$warehouse,$applicationID,$applicationKey);
		
        sleep(1);
        

    }

    $i++;

}

function GetSkuId($refId,$applicationID,$applicationKey){

    $url = 'http://'. $_POST['accountname'] .'.vtexcommercestable.com.br/api/catalog_system/pvt/sku/stockkeepingunitidbyrefid/'.$refId;

    $headers = array(
        'http' => array(
            'method' => "GET",
            'header' => "X-VTEX-API-AppKey: " . $applicationID . "\r\n" .
                "X-VTEX-API-AppToken: " . $applicationKey . "\r\n" .
                "Content-Type: application/json" . "\r\n" .
                "DecibelTimestamp: " . date('Ymd H:i:s', time()) . "\r\n"
        )
    );

    $context = stream_context_create($headers);

    $response = file_get_contents($url, false, $context);
    return json_decode($response);

}

function SavePrice($sku,$price,$applicationID,$applicationKey){

    $url = 'http://rnb.vtexcommercestable.com.br/api/pricing/pvt/price-sheet/?an='. $_POST['accountname'];

    $data = array(
        "itemId" => $sku,
        "price" => $price,
        "listPrice" => $price
    );

    $data2 = array(
        $data
    );

    $url_send = $url;
    $str_data = json_encode($data2);


    $ch = curl_init($url_send);
    $headers= array('Content-Type: application/json','X-VTEX-API-AppKey:'.$applicationID.'', 'X-VTEX-API-AppToken:'.$applicationKey);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$str_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;


}

function SaveStock($sku,$qty,$warehouse,$applicationID,$applicationKey){

    $url = 'http://logistics.vtexcommercestable.com.br/api/logistics/pvt/inventory/skus/'.$sku.'/warehouses/'.$warehouse.'?an='. $_POST['accountname'];

    $data = array(
        "unlimitedQuantity" => false,
        "dateUtcOnBalanceSystem" => null,
        "quantity" => $qty
    );

    $url_send = $url;
    $str_data = json_encode($data);


    $ch = curl_init($url_send);
    $headers= array('Content-Type: application/json','X-VTEX-API-AppKey:'.$applicationID.'', 'X-VTEX-API-AppToken:'.$applicationKey);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$str_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;

}


fclose($fp);
fclose($handle);

echo "Finalizado \n";
?>