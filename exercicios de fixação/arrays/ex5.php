<!-- Crie um array com os nomes: joao, ana, lucas. Use array_map() para transformar 
todos os nomes em maiúsculas. Mostre o resultado. -->

<?php
$nomes = array(
    "joao",
    "ana",
    "lucas",
    "agatha"
);

$nomesMaiusculo = array_map("strtoupper", $nomes); // strtoupper deixa as letras maiusculas
print_r($nomesMaiusculo);
?>
