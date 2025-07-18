function trataDados(){
    var cabecalhos = ajax.getAllResponseHeaders();
    document.getElementById("saida").style.backgroundColor="pink";
    document.getElementById("saida").innerHTML="<pre>"+cabecalhos+"</pre>";
    //caso quisesemos um cabeçalho especifico usariamos getResponseHeader
    //var cabecalhos = ajax.getResponseHeader("Content-Type"); ou
    //var cabecalhos = ajax.getResponseHeader("Content-Length");
}