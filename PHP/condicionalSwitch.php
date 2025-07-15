<?php

//parecido com if, porém sua sintaxe é:
    //switch(operador)
    //{
    //case valor1:
        //<comandos>
        //break;
    //case valor2:
        //<comandos>
        //break;
    //....
    //case valorN:
        //<comandos>
        //break;
    //default:
        //<comandos>
        //break;
    //}

//exemplo de uso deste comando:

switch($opcao)
{
    case 's':
        echo"Você escolheu a opção SIM";
        break;
    case'n':
        echo"Você escolheu a opção NÃO";
        break;
    default:
        echo"Opção digitada inválida";
        break;
}

?>