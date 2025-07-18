window.onload = function(){
    var texto = document.getElementById("username");
    if(texto != null){
        texto.onblur = function(){//onblur serve para já ser enviado se perder o foco
            testaUsuario(texto.value);
        }
    }
}

function testaUsuario(username){
    if(username){
        var url="exemplo1.php?username="+encodeURIComponent(username);
        requisicaoHTTP("GET", url, true);
    }
}

function trataDados(){
    var info = ajax.responseText;
    alert(info);
}