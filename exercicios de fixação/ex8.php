<!-- Dado o array: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 Filtre apenas os números pares -->

<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numerosPar = array_filter($numeros, function($par){
    return $par%2==0
});
print_r($numerosPar);

?>