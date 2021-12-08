<?php
// Escreva um algoritmo que leia a altura e o peso de uma pessoa, 
//calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.
class CalculoIMC{
    public $altura, $peso, $resultado;
    public function __construct($altura, $peso){
        $this->altura = $altura;
        $this->peso = $peso;
        $this->resultado = $this->peso / ($this->altura ** 2);
    }
    public function getResultado(){
        return $this->resultado;
    }
}

$dicionario = [
    18.5 => "Abaixo do peso",
    24.9 => "Peso normal",
    29.9 => "Sobrepeso",
    34.9 => "Obesidade grau 1",
    39.9 => "Obesidade grau 2",
    40.0 => "Obesidade grau 3"
];

$IMC = new CalculoIMC(1.70, 75);

foreach($dicionario as $key => $value){
    if($key <= $IMC){
        echo "Seu IMC é $key e você está $value";
    }else{
        echo "Seu IMC é $key e você está $value";
    }
}

//OBS: O Código está com erros(não está calculando o IMC corretamente), Falta corrigir.

?>