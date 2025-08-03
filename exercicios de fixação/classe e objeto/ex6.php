<!-- Crie uma classe Animal com um método falar(). Depois crie uma classe Cachorro que herda Animal 
e sobrescreve o método falar() para imprimir “Au Au!”. Instancie um objeto Cachorro e chame 
o método falar(). -->

<?php

class Animal{
    public function falar(){
        echo "Som do animal";
    }
}
// Classe filha que herda de Animal
class Cachorro extends Animal {
    // Sobrescreve o método falar()
    public function falar() {
        echo "Au Au!";
    }
}

// Instancia o objeto da classe Cachorro
$meuCachorro = new Cachorro();
// Chama o método falar()
$meuCachorro->falar();
?>