<?php

//if: comando que avalia uma expressão, pode ter como complemento elseif e ou else. sintaxe:
    //if(expressao1)
    //{bloco1}
    //elseif(expressao2)
    //{bloco2}
    //else
    //{bloco3}
//leitura: se expressão1 for verdadeira executa bloco1, senao, se expressão2 for verdadeira executa bloco2, senao executa bloco3
//o if pode aparecer sozinho em codigos

$nota = 6;

if($nota == 10)
{
    echo"Parabens!<br>";
    echo"Voce tirou a nota maxima!";
}
?>