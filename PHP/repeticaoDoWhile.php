<?php
//o while avalia a expressão no inicio do laço e o do...while avalia no fim do laço, sintaxe:
//do
//{
//comandos
//}while(expressao);

$numero = 1;
do{
    echo"O valor atual do numero é $numero <br>";
    $numero++;
}while($numero<4);

//o programa irá parar com 3 numeros gerados
?>