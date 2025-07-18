<?php
$gmtDate = gmdate("D, d, M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-Revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

$usuarios = array(
    "Ana", 
    "Cassia"
);
$valido = 1;
$username = strtolower($_GET["username"]);
for($i=0; $i<sizeof($usuarios); $i++)
    if($usuarios[$i] == $username)
        $valido = 0;
if($valido) echo "Username OK!";
else echo "Username já existe! Escolha outro!";
?>