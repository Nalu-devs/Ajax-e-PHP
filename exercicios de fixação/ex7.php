<!-- Dado um array com nomes repetidos:"Ana", "Lucas", "Ana", "João", "Lucas", "Bia" 
Remova os nomes duplicados e exiba o array final. -->

<?php

$nomes = ["Ana", "Lucas", "Ana", "João", "Lucas", "Bia"];
$nomesSemRepeticao = array_unique($nomes);
print_r($nomesSemRepeticao);

?>