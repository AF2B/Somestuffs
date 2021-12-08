<?php
//Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.
class SomaDosQuadrados{
    public $valor1, $valor2, $resultado;

    public function __construct($valor1, $valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->resultado = ($this->valor1**2) + ($this->valor2**2);
    }
    public function getResultado(){
        return $this->resultado;
    }
}
$result = new SomaDosQuadrados(5, 10);
$result = $result->getResultado();
echo "O resultado da soma dos quadrados é: ".$result;

$result2 = new SomaDosQuadrados(10, 10);
$result2 = $result2->getResultado();
echo "\nO resultado da soma dos quadrados é: ".$result2;
?>