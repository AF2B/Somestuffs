<?php
require_once 'relacionamento1.php';

class Luta {
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //metódos
    public function marcarLuta($desafiado, $desafiante){
        if($this->desafiado->getCategoria() === $this->desafiante->getCategoria()){
            $this->aprovada = true;
        }else{
            $this->aprovada = false;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>{$this->desafiado->getNome()} venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>{$this->desafiante->getNome()} venceu</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer</p>";
        } 
    }

    //setters && getters 
    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($desafiado){
        $this->desafio = $desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    
}