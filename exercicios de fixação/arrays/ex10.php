<!-- Crie um array com os nomes de 5 pessoas.
Use um foreach para exibir a posição (índice) e o nome de cada pessoa. -->

<?php

$pessoas = ["Ana", "Lucas", "João", "Maria", "Beatriz"];

foreach ($pessoas as $indice => $nome) {
    echo "Posição [$indice]: $nome <br>";
}

?>