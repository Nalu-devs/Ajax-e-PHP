<?php
//sintaxe para definir função:
//function nome_função(arg1, arg2, arg3 ...){
//comandos
//[return <expressão>]
//}

function triplo($numero){
    $x = $numero * 3;
    return $x;
}
$valor = 4;
echo"O triplo de $valor é".triplo($valor);
?>