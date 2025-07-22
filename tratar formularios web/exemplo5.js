window.onload = function(){
    var marca = document.getElementById("marca");
    marca.onchange = function(){
        mostraModelos(marca);
    }
}

function mostraModelos(marca){//sera chamada quando o usuario trocar a opcao selecionada
    if(marca == null){
        return;
    }
    var escolhida = marca.options[marca.selectedIndex].value;
    var url = "exemplo5.php?marca="+encodeURIComponent(escolhida);
    requisicaoHTTP("GET", url, true);
}

function trataDados(){
    var info = ajax.responseText; //obtem a resposta como string
    var arrayOpcoes = eval(info); // converte para um array JSON

    //cria a nova lista
    var listaNova = document.createElement("select");
    listaNova.setAttribute("name", "modelos");
    criaOpcao(listaNova, arrayOpcoes);

    //exibe nova lista na camada existente
    var camada = document.getElementById("exibirAqui");
    limpa(camada);
    camada.appendChild(listaNova);
}

//cria opcoes, adicionando a lista
function criaOpcao(lista, opcoes){
    if(opcoes == null || opcoes.length==0){
        return
    }
    var op = null;
    for (var i=0; i<opcoes.length; i++){
        op = document.createElement("option");
        op.appendChild(document.createTextNode(opcoes[i]));
        lista.appendChild(op);
    }
}

//remove todos os fillhos do nodo fornecido
function limpa(elemento){//evita que seja exibida varias listas ao mesmo tempo
    if(elemento != null && elemento.hasChildNodes()){
        for(var i=0; i<elemento.childNodes.length; i++){
            elemento.removeChild(elemento.firstChild);
        }
    }
}