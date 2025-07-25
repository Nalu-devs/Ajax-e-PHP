<!-- Crie um array chamado $filmes com 3 nomes de filmes. Adicione mais dois filmes usando 
array_push(). Depois, remova o último filme usando array_pop() e exiba o array final. -->

<?php

$filmes = array(
    "Procurando Nemo",
    "Enrolados",
    "Hoje não vou embora sozinho"
);

array_push($filmes, "Sobrenatural", "Meninas Malvadas"); // adiciona ao final
array_pop($filmes); // remove o último ("Meninas Malvadas")

// Mostrando os filmes
print_r($filmes);
?>
