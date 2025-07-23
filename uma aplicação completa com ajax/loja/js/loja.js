//carrega a pagina inicial
window.onload = function(){
    Loja('inicio', 0);
}

//envia a requisição ao servidor
function Loja(secao, parametro){
    Aviso(1);//exibe o aguarde...
    var url = "php/loja.php?"+secao+"="+encodeURIComponent(parametro);
    requisicaoHTTP("GET", url, true);
}

//envia a nova quantidade do produto, para atualização no carrinho de compras
function AtualizaQuantidade(campo){
    var id = campo.name;
    var quant = campo.value;
    Loja('quantidade', id+'-'+quant);
}

//Exibe ou oculta a msg de espera
function Aviso(exibir){
    var saida = document.getElementById("avisos");
    if(exibir){
        saida.className = "aviso";
        saida.innerHTML = "Aguarde...processando!";
    }
    else{
        saida.className = "";
        saida.innerHTML = "";
    }
}

//exibe a resposta do servidor
function trataDados(){
    var info = ajax.responseText;
    var saida = document.getElementById("conteudo");
    saida.innerHTML = info;
    Aviso(0);
}