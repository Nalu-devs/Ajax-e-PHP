window.onload = function(){
    var palavra = document.getElementById("palavra")
    if(palavra != null)
        palavra.onblur = function(){traduz(palavra.value);}
}

function traduz(palavra){
    if(palavra){
        var url="exemplo2.php?palavra="+encodeURIComponent(palavra);
        requisicaoHTTP("GET", url, true);
    }
}

function trataDados(){
    var info = ajax.responseText;
    var resposta = document.getElementById("traducao");
    resposta.value = info;
}