var ajax;
var dadosUsuario;

//criação de objetos e fazer a requisição
function requisicaoHTTP(tipo, url, assinc){//tenta instanciar o objeto e chama a função que fara a requisição passando a ela os dados fornecidos pelo usuario
    if(window.XMLHttpRequest){
        ajax = new XMLHttpRequest();
    }
    else if(window.ActiveXObject){
        ajax = new ActiveXObject("Msxml2.XMLHTTP");
        if(!ajax){
            ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    if(ajax){
        iniciaRequisicao(tipo, url, assinc);//recebe os dados da funcao requisicaoHTTP e processa a requisição além de definir a função de tratamento de respostas
    }
    else{
        alert("Seu navegador não possui suporte a essa aplicação!");
    }
}

//Inicia objeto criado e envia dados se existir
function iniciaRequisicao(tipo, url, bool){
    ajax.onreadystatechange = trataResposta;
    ajax.open(tipo, url, bool);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    ajax.overrideMimeType("text/XML");
    ajax.send(dadosUsuario);
}

//Inicia requisição com envio de dados
function enviaDados(url){//define antes os dados a serem enviados 
    criaQueryString();
    requisicaoHTTP("POST", url, true);
}

//Cria a string a ser enviada
function criaQueryString(){//coloca os dados do formulario no formato de uma queryString
    dadosUsuario="";
    var frm = document.forms[0];
    var numElementos = frm.elements.length;
    for(var i=0; i< numElementos; i++){
        if(i< numElementos-1){
            dadosUsuario+=frm.elements[i].name+"="+encodeURIComponent(frm.elements[i].value)+"&";
        }
        else{
            dadosUsuario+=frm.elements[i].name+"="+encodeURIComponent(frm.elements[i].value);
        }
    }
}

//Trata resposta do servidor
function trataResposta(){//verifica se a requisição foi concluida e inicia o tratamento dos dados
    if(ajax.readyState == 4){
        if(ajax.status == 200){
            trataDados(); //criar essa função no programa
        }
        else{
            alert("Problema na comunicação com o objeto XMLhttpRequest");
        }
    }
}