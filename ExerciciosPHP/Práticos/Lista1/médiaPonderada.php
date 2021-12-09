<?php
// Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, 
//considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.
class MediaPonderada{
    private $nota1, $nota2, $nota3, $media;

    public function __construct($nota1, $nota2, $nota3){
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->media = ($this->nota1 * 2 + $this->nota2 * 3 + $this->nota3 * 5) / 10;
    }
    public function getMedia(){
        return $this->media;
    }
}
$media1 = new MediaPonderada(5, 8, 7);
echo "A média é: " . round($media1->getMedia());
?>