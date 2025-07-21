window.onload = function (){
    var estado = document.getElementById("estado");
    estado.onblur = function(){ exbirCidades(estado);}
}

function exbirCidades(estado){
    if(estado == null){return;}
    var opcoes = estado.options;
    var lista = "";
    var selecionados = new Array();
    var i =0, j=0, k=0;

    for(i=0; i<opcoes.length; i++)
        if (opcoes[i].selected){
            selecionado[j]=opcoes[i].value;
            j++;
        }
    for (k=0; k<selecionados.length; k++){
        if(k<selecionados.length-1){lista +=selecionados[k]+",";}
        else{ lista += selecionados[k];}
    }
    var url= "exemplo4.php?estados="+encodeURIComponent(lista);
    requisicaoHTTP("GET", url, true);
}

function trataDados(){
    var info = ajax.responseText;
    var resposta = document.getElementById("respota");
    resposta.innerHTML = info;
}