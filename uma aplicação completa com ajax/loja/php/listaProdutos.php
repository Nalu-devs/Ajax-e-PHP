<?php
if(isset($_GET["inicio"])){//lista de 10 produtos 
    echo "<p class=\"titulo\">Destaques</p>";
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto LIMIT 10";
}
elseif(isset($_GET["categoria"])){//lista por categoria
    $cat = $_GET["categoria"];
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto WHERE idCategoria=$cat";
}
else{//busca produto pela palavra
    $palavra = $_GET["busca"];
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto WHERE nome like '%$palavra%'";
}
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)==0)
    echo"<p class=\"titulo\">Nenhum produto encontrado!</p>";
else
    for($i=0; i<mysqli_num_rows($res); $i++){
        $dados = mysqli_fetch_row($res);
        $idProduto = $dados[0];
        $nome = $dados[1];
        $preco = number_format($dados[2],2,",",".");
        $promocao = number_format($dados[3],2,",",".");
        echo "<p>$nome<br>";
        if($promocao=="0,00")
            echo "<span class=\"preco\">Preço: R\$ $preco</span><br>";
        else
            echo "<span class=\"precoa\">Promocao: de <span class=\"promocao\">R\$ $preco</span> por R\$ $promocao</span><br>";
        echo " <a href=\"javascript:Loja('detalhes', '$idProduto');\"></a>";
        echo "<a href=\"javascript:Loja('carrinho', '$idProduto');\"></a></p>"
    }
?>