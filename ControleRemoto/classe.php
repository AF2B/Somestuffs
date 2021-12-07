<?php
require_once 'interface.php';

class ControleRemoto implements Controlador{

    private $volume = 50;
    private $ligado = false;
    private $tocando = false;

    public function __construct(){
        $this->volume;
        $this->ligado;
        $this->tocando;
    }

    public function ligar(){

    }

    public function desligar(){

    }

    public function abrirMenu(){

    }

    public function fecharMenu(){

    }

    public function maisVolume(){

    }

    public function menosVolume(){

    }

    public function ligarMudo(){

    }

    public function desligarMudo(){

    }

    public function play(){

    }

    public function pause(){

    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    private function getTocando(){
        return $this->tocando;
    }
}