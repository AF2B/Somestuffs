<<<<<<< HEAD
<?php

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "<br>Livro: {$this->titulo}";
        echo "<br>Autor: {$this->autor}";
        echo "<br>Total de Páginas: {$this->totalPaginas}";
        echo "<br>Página Atual: {$this->pagAtual}";
        echo "<br>Aberto: {$this->aberto}";
        echo "<br>Leitor: {$this->leitor}";
    }

    //metódos de implementação
    public function abrir(){
        $this->abrir = true;
    }

    public function fechar(){
        $this->abrir = false;
    }

    public function folhear(){
        $this->aberto = true ? $this->pagAtual++ : $this->pagAtual;
    }

    public function avancarPag(){
        $this->avancarPag ++;

    }
    public function voltarPag(){
        $this->voltarPag --;
    }


    //SETTERS && GETTERS
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setTotalPaginas($totalPaginas){
        $this->totalPaginas = $totalPaginas;
    }

    public function getTotalPaginas(){
        return $this->totalPaginas;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    public function getLeitor(){
        return $this->leitor;
    }
=======
<?php

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "<br>Livro: {$this->titulo}";
        echo "<br>Autor: {$this->autor}";
        echo "<br>Total de Páginas: {$this->totalPaginas}";
        echo "<br>Página Atual: {$this->pagAtual}";
        echo "<br>Aberto: {$this->aberto}";
        echo "<br>Leitor: {$this->leitor}";
    }

    //metódos de implementação
    public function abrir(){
        $this->abrir = true;
    }

    public function fechar(){
        $this->abrir = false;
    }

    public function folhear(){
        $this->aberto = true ? $this->pagAtual++ : $this->pagAtual;
    }

    public function avancarPag(){
        $this->avancarPag ++;

    }
    public function voltarPag(){
        $this->voltarPag --;
    }


    //SETTERS && GETTERS
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setTotalPaginas($totalPaginas){
        $this->totalPaginas = $totalPaginas;
    }

    public function getTotalPaginas(){
        return $this->totalPaginas;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    public function getLeitor(){
        return $this->leitor;
    }
>>>>>>> acfd551e775ee186e067248d6676c6dfaf6167a8
}