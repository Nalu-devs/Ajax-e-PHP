<?php
$gmtDate = gmdate("D, d, M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-Revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

//arrays de email existentes
$emails = array (
    "contato@site.com.br",
    "nalu@gmail.com"
);
$valido = 1;
$email = strtolower($_GET["email"]);
for($i=0; i<sizeof($emails); $i++){//compara email digitado com os elementos do array
    if($emails[$i]==$email)
        $valido = 0;
}
if($valido) echo "S";
else echo "N";
?>