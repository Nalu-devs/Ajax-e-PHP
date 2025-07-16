function trataDados(){
    var documentoXML = ajax.responseXML;
    console.log(documentoXML)
    var raiz = documentoXML.getElementsByTagName('raiz').item(0);
    var info = raiz.firstChild.data;
    document.getElementById("campoResposta").style.backgroundColor="red";
    document.getElementById("campoResposta").innerHTML=info;
}