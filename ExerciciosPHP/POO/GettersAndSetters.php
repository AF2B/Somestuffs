<?php

class Login
{
    private $email, $idade, $nome;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setIdade($idade)
    {
        return $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function __construct($email, $idade, $nome)
    {
        $this->setEmail($email);
        $this->setIdade($idade);
        $this->setNome($nome);
    }

    public function __toString()
    {
        return "Nome: {$this->getNome()}<br>
                Email: {$this->getEmail()}<br>
                Idade: {$this->getIdade()}<br>";
    }

    public function __destruct()
    {
        echo "Objeto destruido";
    }
}

$login = new Login("teste@teste.com", "123456", "André Filipe");
echo $login;