<!-- Crie dois arrays, um com frutas e outro com legumes. Junte os dois arrays em um só 
e exiba o resultado. -->

<?php
$frutas = array(
    "maça",
    "morango",
    "uva",
    "banana"
);

$legumes = array(
    "cenoura",
    "beterraba",
    "rabanete"
);

$frutasLegumes = array_merge($frutas, $legumes);
print_r($frutasLegumes);
?>