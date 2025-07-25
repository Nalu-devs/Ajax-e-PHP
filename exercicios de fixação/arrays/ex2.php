<!-- Crie um array com os nomes de 5 frutas. Verifique se a fruta "banana" está presente no array.
Se estiver, exiba a mensagem "Banana está na lista!". -->

<?php

$frutas = array(
    "maça",
    "banana",
    "morango",
    "amora",
    "uva"
);

if(in_array("banana", $frutas)){
    echo $frutas[1]; // banana está no índice 1
}
?>