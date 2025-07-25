<!-- Crie uma classe Retangulo com atributos privados largura e altura.
Crie métodos públicos setLargura(), setAltura(), getLargura(), getAltura()
e um método calcularArea() que retorne a área do retângulo. Crie um objeto,
defina valores e exiba a área. -->

<?php

class Retangulo{
    private $largura;
    private $altura;

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calcularArea(){
        echo "A area é igual a {$this->largura * $this->altura}";
    }
}

$area = new Retangulo;
$area->setLargura(2);
$area->setAltura(5);

$area->calcularArea();
?>