window.onload = function(){
    var estado = document.getElementById("estado");
    estado.onchange = function(){ exibeFrete(estado);}//onchange muda direto o estado quando é alterado
}

function exibeFrete(estado){
    if(estado == null){return;}
    selecionado = estado.options[estado.selectedIndex].value;
    var url = "exemplo3.php?estado="+encodeURIComponent(selecionado);
    requisicaoHTTP("GET", url, true);
}

function trataDados(){
    var info = ajax.responseText;
    var resposta = document.getElementById("frete");
    resposta.innerHTML = info;
}