<?php
//Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado
class media{
    public $val1, $val2, $val3, $media;

    public function __construct($val1, $val2, $val3){
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->val3 = $val3;
        $this->media = ($this->val1 + $this->val2 + $this->val3) / 3;
    }

    public function getMedia(){
        return $this->media;
    }
}

$media = new media(10, 20, 30);
echo "A média é: " . $media->getMedia();
?>