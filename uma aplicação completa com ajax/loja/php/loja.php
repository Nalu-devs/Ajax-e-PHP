<?php
$gmtDate = gmdate("D, d, M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-Revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=UTF-8");

include "conecta.php";
if(isset($_GET["inicio"])|| isset($_GET["busca"])|| isset($_GET["categoria"]))
    //lista produtos
    include "listaProdutos.php";
elseif(isset($_GET["detalhes"]))
    //exibe os detalhes do produto
    include "mostraDetalhes.php";
elseif(isset($_GET["carrinho"])||isset($_GET["frete"])||isset($_GET["quantidade"]))
    //atualiza carrinho
    include "carrinho.php";
elseif(isset($_GET["limpar"]))
    //limpa carrinho
    include "limpaCarrinho.php";
elseif(isset($_GET["validaUsuario"]))
    //encerra pedido e vai para validação o usuario
    include "validaUsuario.php";
elseif(isset($_GET["novoUsuario"]))
    include "novoUsuario.php";
else
    echo "ERRO: favor acessar a home da loja!";
?>