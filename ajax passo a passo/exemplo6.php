<?php
$gmtDate = gmdate("D, d, M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-Revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");//Serve para definir o conjunto de caracteres a ser usado

$times = array(
    "gremio" => "Time de PORTO ALEGRE (RS)<br>Estádio: Olímpico",
    "palmeiras" => "Time de SÃO PAULO (SP)<br>Estádio: Palestra Italia",
    "cruzeiro" => "Time de BELO HORIZONTE (MG)<br>Estádio: Mineirão",
    "flamengo" => "Time de RIO DE JANEIRO (RJ)<br>Estádio: Maracana",
    "corinthians" => "Time de SÃO PAULO (SP)<br>Estádio: Neo quimica arena"
);
$time = $_GET["time"];
if(isset($times[$time]))
    echo $times[$time];
else
    echo "Time não encontrado!";

?>