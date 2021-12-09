<?php
//Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.
class AreaTrapezio{
    private $area, $baseMaior, $baseMenor, $altura;
    public function __construct($baseMaior, $baseMenor, $altura){
        $this->baseMaior = $baseMaior;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
        $this->area = ($this->baseMaior + $this->baseMenor) * $this->altura / 2;
}
    public function getArea(){
        return $this->area;
    }
}
/*$baseMaior = readline("Digite a base maior: ");
$baseMenor = readline("Digite a base menor: ");
$altura = readline("Digite a altura: ");*/
$areaTrapezio = new AreaTrapezio($baseMaior, $baseMenor, $altura);
echo "A área do trapézio é: " . $areaTrapezio->getArea();
?>