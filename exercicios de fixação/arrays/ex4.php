<!-- Crie um array de números aleatórios: 32, 5, 7, 19, 11 Ordene esses números em ordem 
crescente usando sort() Mostre o array antes e depois da ordenação. -->

<?php
$numeros = array(
    32,
    5,
    7,
    19,
    11
);

print_r($numeros);
sort($numeros);
print_r($numeros);
?>