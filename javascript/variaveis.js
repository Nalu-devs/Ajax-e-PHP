//O javascript é uma linguagem com tipagem dinâmica, os tipos de variaveis não precisam ser definida
//no incio do programa. Ela é uma linguagem inetrpretada, são interpretados em tempo real e executado
//pelo navegadr no momento em que o usuário acessar a página

//Declaração de variaveis, 2 sem definição de valor e duas com valor padrão

var nome;
var cidade, estado;
var invalido = false;
var pergunta = "Qual sua idade?";

//Declaração de variavel global (variavel fora de uma função, for ou etc)

var variavelGlobal;

//Declaração de variavel local (variavel dentro de função, for e etc)

function local(){
    var variavelLocal;
}

//Declaração de vetores o new serve para declarar novo objeto abrir um novo espaço na memória (js n obriga mas outras linguagens sim)

var vetor = new Array;
var outroVetor = new Array(1,2,3,4,5);