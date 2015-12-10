<?php

$url1 = "malaamada.csv";
if (($handle = fopen($url1, 'r')) === false) {
    die('Error opening file, unable to upload file.');
}

$headers = fgetcsv($handle, 1024, ',');
$linhas[] = array();

$fp = fopen('malaamada-total.csv', 'w');
fputcsv($fp,$headers);
$i=1;
while ($row = fgetcsv($handle, 1024, ',')) {
    if ($row[3] < 8 ){
        echo $i."\n";
        $i++;
        fputcsv($fp, $row);
    }
}


fclose($fp);
fclose($handle);
?>
