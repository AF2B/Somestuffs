<?php

class Carro{
    public $cor;
    public $modelo;
    public $velocidade;
    public $motor;
    public $portas;
    public $ano;

    public function acelerar(){
        $this->velocidade += 10;
        return "Acelerando: " . $this->velocidade . "km/h";
    }

    public function frear(){
        $this->velocidade -= 10;
        return "Freando" . $this->velocidade . "km/h";
    }

    public function documentacaoDoVeiculo(){
        echo "Cor: {$this->cor}" . PHP_EOL;
        echo "Modelo: {$this->modelo}" . PHP_EOL;
        echo "Velocidade: {$this->velocidade}" . PHP_EOL;
        echo "Motor: {$this->motor}" . PHP_EOL;
        echo "Portas: {$this->portas}" . PHP_EOL;
        echo "Ano: {$this->ano}" . PHP_EOL;
    }

    public function trocarMarcha(){
        if($this->velocidade > 0){
            return "Você está acelerando";
        }elseif($this->velocidade == 0){
            return "Você está parado";
        }else{
            return "Você está freando";
        }
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function __destruct()
    {
        return "Unset" . PHP_EOL;
    }
}

class Veiculo extends Carro{
        public function mostrarDocumentacao(){
            parent::documentacaoDoVeiculo();
        }
    }

{
    $carro1 = new Veiculo();
    $carro1->cor = "Preto";
    $carro1->modelo = "Opala";
    $carro1->velocidade = 0;
    $carro1->motor = "4.1";
    $carro1->portas = 4;
    $carro1->ano = "1991";

    $carro1->getModelo();
    $carro1->documentacaoDoVeiculo();
    $carro1->acelerar();
    $carro1->__destruct();
}
echo PHP_EOL;
{
    $carro2 = new Veiculo();
    $carro2->cor = "Preto";
    $carro2->modelo = "Azera";
    $carro2->velocidade = 0;
    $carro2->motor = "3.0";
    $carro2->portas = 4;
    $carro2->ano = "2011";

    $carro2->mostrarDocumentacao();
    $carro2->__destruct();
}