<?php
//foreach é uma maneira mais facil de navegar por um array, sintaxes possiveis:
//ex1:
//foreach($nome_array as $elemento){
//comandos
//}

//ex2:
//foreach($nome_array as $chave => $valor){
//comandos
//}

$vetor = array(1, 2, 3, 4);
foreach($vetor as $v){
    print"O valor atual do vetor é $v.<br>";
}
//resultado: 1,2,3,4

$a = array ("um" => 1, "dois" => 2, "tres" => 3);
foreach($a as $chave => $valor){
    print"\$a[$chave]=>$valor.<br>";
}
//resultado: [um] => 1, [dois] => 2, [tres] => 3

?>