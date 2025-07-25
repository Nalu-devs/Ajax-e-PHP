<!-- Crie um array associativo chamado $aluno que contenha as chaves 
"nome", "idade" e "curso" com valores fictícios. Depois, exiba o valor do curso na tela. -->

<?php
$aluno = array(
    "nome" => "Ana Lúcia",
    "idade" => 18,
    "curso" => "Informática para Internet"
);

echo "Curso: " . $aluno["curso"];
?>