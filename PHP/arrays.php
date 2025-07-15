<?php
//variavel comum(escalares) e arrays(vetor) são diferentes, arrays podem amarzenar varios valores ao mesmo tempo
//o indice é indicado por colchetes []
//ex:
//$vetor[0] = 30
//$vetor[1] = 40

//caso o indice não seja indicado o php incrementara sozinho
//ex:
//$vet[ ] = "Gremio"
//$vet[ ] = "Campeao"

//o indice pode ser uma chave associativa, um texto
//ex:
//$vetor["time"] = "Gremio"
//$vetor["fundacao"] = 1903

//tambem existe as matrizes que são arrays multidimensionais
//ex:
//$clube["RS"]["PortoAlegre"] = "Gremio"
//$clube["MG"]["BeloHorizonte"] = "Cruzeiro"

//Outra forma de criar um array é pela função array do PHP. EX:

    $vetor = array (10,50,100,150,200);
    echo $vetor[2]."<br>";
    $vet = array(1, 2, 3, "nome"=>"Juliano");
    echo $vet[0]."<br>";
    echo $vet["nome"];

//resultado: 100; 1; Juliano
?>