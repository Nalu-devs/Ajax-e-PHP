window.onload=function(){
    document.forms[0].onsubmit=function(){
        testaEmail(this.email.value);
        return false;
    }
}

function emailValido(email){
    //não pode ser vazio, tem que ter @ e não pode ter espaços
    if(email == null || email.length==0 || email.indexOf(".")==-1 || email.indexOf("@")== -1 || email.indexOf(" ")!=-1)
        return false;

    //testa os caracteres antes de @, não pode começar nem terminar com ., deve ter pelo menos dois caracteres
    expressao=/(^\w{1,}\.?\w{1,})@/;//expressão regular
    confere = expressao.exec(email);
    if(!confere)
        return false;

    //testa os caracteres depois do @
    //deve ter ao menos 2 caracteres seguidos por um ponto
    //seguido por zero ou mais ocorrencias de ao menos 2 caracteres
    expressao = /@(\w{2,}\.(\w{2,}\.)?[a-zA-Z]{2,3})$/;//expressão regular
    confere = expressao.exec(email);
    if(!confere)
        return false;
    return true;
}

function testaEmail(email){
    if(emailValido(email)){
        var url="exemplo8.php?email="+encodeURIComponent(email);
        requisicaoHTTP("GET", url, true);
    }
    else{
        alert("O formato do email digitado é invalido!");
    }
}

function trataDados(){
    var valido = ajax.responseText;
    if(valido=="S")
        alert("PARABENS! seu email é valido e foi aceito pleo servidor")
    else
        alert("OPSSSS! este email ja existe em nosso cadastro!")
}