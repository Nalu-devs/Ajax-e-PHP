<!-- Crie um array com os dias da semana e exiba o array na ordem reversa. -->

<?php

$semana = [
    "segunda-feira",
    "terça-feira",
    "quarta-feira",
    "quinta-feira",
    "sexta-feira",
    "sabado",
    "domingo"
];

$semanareversa = array_reverse($semana);
print_r($semanareversa);

?>