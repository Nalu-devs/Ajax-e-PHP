<!-- Crie uma classe Calculadora com um método estático somar($a, $b) que retorne a soma dos valores
passados. Use esse método sem instanciar a classe. -->

<?php

class Calculadora{
    public static function somar($a, $b){
        return $a+$b;
    }
}

echo Calculadora::somar(10, 10);

?>