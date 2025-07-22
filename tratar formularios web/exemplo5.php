<?php
$gmtDate = gmdate("D, d, M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-Revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

$modelos = array(
    'chevrolet' => '["Celta", "Corsa", "Vectra"]',
    'fiat' => '["Uno", "Palio", "Stilo"]',
    'ford' => '["Fiesta", "Focus", "Fusion"]',
    'toyota' => '["Corolla", "Fielder", "Hilux"]'
);

$marca = $_GET["marca"];
if(isset($modelos[$marca]))
    echo $modelos[$marca];
?>