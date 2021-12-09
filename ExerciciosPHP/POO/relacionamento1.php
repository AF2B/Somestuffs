<<<<<<< HEAD
<?php

class Lutador{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //construtor
    public function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $categoria,
        $vitorias,
        $derrotas,
        $empates
    ){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    //metódos
    public function apresentar(){
        echo "----------";
        echo "<br>";
        echo "Este lutador possui: " .
            "<br>" ."nome: " . $this->getNome() .
            "<br>" . "nacionalidade: " . $this->getNacionalidade() .
            "<br>" . "idade: " . $this->getIdade() .
            "<br>" . "altura: " . $this->getAltura() .
            "<br>" . "peso: " . $this->getPeso() .
            "<br>" . "categoria: " . $this->getCategoria() .
            "<br>" . "vitorias: " . $this->getVitorias() .
            "<br>" . "derrotas: " . $this->getDerrotas() .
            "<br>" . "empates: " . $this->getEmpates() . "<br>";
        echo "----------";
    }

    public function ganharLuta(){
      return $this->setVitorias($this->getVitorias() + 1); 
    }

    public function perderLuta(){
        return $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        return $this->setEmpates($this->getEmpates() + 1);
    }


    //setters && getters
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getCategoria(){
        $this->setCategoria();
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }
        elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Peso inválido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }

=======
<?php

class Lutador{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //construtor
    public function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $categoria,
        $vitorias,
        $derrotas,
        $empates
    ){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    //metódos
    public function apresentar(){
        echo "----------";
        echo "<br>";
        echo "Este lutador possui: " .
            "<br>" ."nome: " . $this->getNome() .
            "<br>" . "nacionalidade: " . $this->getNacionalidade() .
            "<br>" . "idade: " . $this->getIdade() .
            "<br>" . "altura: " . $this->getAltura() .
            "<br>" . "peso: " . $this->getPeso() .
            "<br>" . "categoria: " . $this->getCategoria() .
            "<br>" . "vitorias: " . $this->getVitorias() .
            "<br>" . "derrotas: " . $this->getDerrotas() .
            "<br>" . "empates: " . $this->getEmpates() . "<br>";
        echo "----------";
    }

    public function ganharLuta(){
      return $this->setVitorias($this->getVitorias() + 1); 
    }

    public function perderLuta(){
        return $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        return $this->setEmpates($this->getEmpates() + 1);
    }


    //setters && getters
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getCategoria(){
        $this->setCategoria();
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }
        elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Peso inválido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }

>>>>>>> acfd551e775ee186e067248d6676c6dfaf6167a8
}