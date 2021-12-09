<?php
//Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), 
//calcule e exiba para o usuário a velocidade em km/h.
class ConversorDeVelocidade{
    public $metros, $kilometros, $calculo;
    public function __construct($calculo){
        $this->calculo = $calculo;
        $this->metros = $this->calculo * 3.6;
        $this->kilometros = $this->metros / 1000;
    }
    public function getKilometros(){
        return $this->kilometros;
    }
}
$calculo = new ConversorDeVelocidade(10);
echo "A velocidade em m/s para km/h é: " . $calculo->getKilometros() . "km/h";

echo "\n";

$calculo2 = new ConversorDeVelocidade(1000);
echo "A velocidade em m/s para km/h é: " . $calculo2->getKilometros() . "km/h";



?>