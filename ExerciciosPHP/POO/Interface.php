<?php

interface Crud{
    public function create($data);
    public function read();
    public function update($id, $data);
    public function delete($id);
}

class Veiculo implements Crud{

    public function create($data){
        echo "Criando um novo veiculo: " . $data;
    }

    public function read(){
        echo "Lendo os veiculos";
    }

    public function update($id, $data){
        echo "Atualizando o veiculo: " . $id . " com os dados: " . $data;
    }

    public function delete($id){
        echo "Deletando o veiculo: " . $id;
    }
}