//Os comando try/catch servem para manipulação de erros.
//o try trata qualquer codigo dentro das chaves se for gerada uma exceçã sera executado o catch

//try{
//comandos
//}
//catch(err){
//tratamento de exceção
//}

//A variavel err se refere ao erro do javascript se quiser ver a msg deve usar err.menssage
//Exemplo de como tratar a exceção que será gerada:

function iniciaRequisicao(tipo, url, bool){
    try{
        ajax.onreadystatechange = trataResposta;
        ajax.open(tipo, url, bool);
        ajax.send(null);
    }
    catch(err){
        alert("Não foi possivel estabelecer contato com o servidor no momento.");
    }
}