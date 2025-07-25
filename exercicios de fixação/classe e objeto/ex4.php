<!-- Explique o que acontece se você tentar acessar um atributo private diretamente fora da classe.
Faça um teste simples para comprovar. -->

<?php

//proteje os atributos da classe impedindo que seja acessado fora da classe

class Retangulo{
    private $largura;
    private $altura;

    public function calcularArea(){
        echo "A area é igual a {$this->largura * $this->altura}";
    }
}

$area = new Retangulo;
$area->largura=2;//impossivel
$area->altura=5;//impossivel

$area->calcularArea();
?>