function trataDados(){
    var cabecalhos = ajax.getAllResponseHeaders();
    document.getElementById("saida").style.backgroundColor="pink";
    document.getElementById("saida").innerHTML="<pre>"+cabecalhos+"</pre>";
}