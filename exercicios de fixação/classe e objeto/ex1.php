<!-- Crie uma classe Carro com os atributos públicos marca e modelo. 
Crie um método chamado exibir() que imprima “Marca: [marca], Modelo: [modelo]”.
Instancie a classe, defina os valores dos atributos e chame o método. -->

<?php

class Carro {
    public $marca;
    public $modelo;

    public function exibir() {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}

// Criando o objeto
$meuCarro = new Carro();

// Definindo os valores
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";

// Chamando o método
$meuCarro->exibir();

?>
