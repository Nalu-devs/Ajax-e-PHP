<?php
$servidor = "localhost";
$usuario = "juliano";
$senha = "12345";
$banco = "test";
$con = mysqli_connect($servidor, $usuario, $senha, $banco);
$res = mysqli_query($con, "SELECT titulo, autor FROM livros");
$num_livros = mysqli_num_rows($res);
echo "Existem $num_livros livros cadastrados no sistema.";
mysqli_close($con);
//para não precisar repertir sempre esse processo, vamos criar um include que puxaremos sempre que precisarmos

// resultado: Existem 2 livros cadastrados no sistema.
?>