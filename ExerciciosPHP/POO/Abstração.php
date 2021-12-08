<?php

abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function sacar($sacar);
    abstract protected function depositar($depositar);

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
}

class Nubank extends Banco{
    public function sacar($valor){
        if($valor > $this->saldo){
            return "Saldo insuficiente!";
        }else{
            $this->saldo -= $valor;
            return "Saque realizado com sucesso!" . PHP_EOL . "Seu novo saldo é de: R$" . $this->saldo;
        }
    }
    public function depositar($valor){
        $this->saldo += $valor;
        return "Deposito realizado com sucesso!" . PHP_EOL . "Seu novo saldo é de: R$" . $this->saldo . PHP_EOL;
    }
}

$nubank = new Nubank();
echo $nubank->depositar(1300);

echo PHP_EOL;

echo $nubank->sacar(1400);