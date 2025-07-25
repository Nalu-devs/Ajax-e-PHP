<!-- Crie uma classe Pessoa que tenha um método construtor __construct para receber nome e idade.
Crie um método apresentar() que exiba “Meu nome é [nome] e tenho [idade] anos.”
Crie um objeto e use o método. -->

<?php

class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Meu nome é {$this->nome} e eu tenho {$this->idade} anos.";
    }
}

$eu = new Pessoa();
$eu->nome = "Ana";
$eu->idade = 18;

$eu->apresentar();

?>