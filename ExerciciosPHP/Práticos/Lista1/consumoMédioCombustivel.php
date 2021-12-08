<?php
//Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a 
//quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.  
//Fórmula: Consumo médio = Km / litros

class consumoMedioCombustivel{
    private $km, $consumo, $consumoMedio;
    
    public function __construct($km, $consumo){
        $this->km = $km;
        $this->consumo = $consumo;

        $this->consumoMedio = $this->km / $this->consumo;
    }
    public function getConsumoMedio(){
        return $this->consumoMedio;
    }
}
$carro1 = new consumoMedioCombustivel(200, 10);
echo "O consumo médio do carro é: " . $carro1->getConsumoMedio() . " km/l\n";

$carro2 = new consumoMedioCombustivel(300, 23.6);
echo "O consumo médio do carro é: " . $carro2->getConsumoMedio() . " km/l";