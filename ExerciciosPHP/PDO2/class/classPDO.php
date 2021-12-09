<?php


class Connect{
    private $host;
    private $dbname;
    private $id;
    private $password;


    public function __construct($host, $dbname, $id, $password){
        try{
            $pdo = new PDO("mysql:dbname=$host;dbname=$dbname", "$id", "$password");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $error){
            echo "Não foi possível conectar ao banco de dados " . $error->getMessage();
        }
    }

    //FUNCTIONS
    public function insert(){
        $sql = "INSERT INTO clientes (nome, email, contato) VALUES (:nome, :email, :contato)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome", "abcde");
            $stmt->bindValue(":email", "abcde@abcde.com");
            $stmt->bindValue(":contato", "99999-9999");
            $stmt->execute();

            if($stmt->execute()){
                return "Dados inseridos com sucesso";
            }else{
                return "Erro";
            }
    }

    public function update(){
        $sql = "UPDATE FROM clientes SET nome = :nome WHERE id = 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome" , "abcde");
            $stmt->execute();
    }

    public function read(){
        $sql = "SELECT * FROM clientes";
            $stmt = $this->pdo->prepare($sql);
            $stmt = $this->pdo->execute();
                if($stmt->execute($sql)){
                    return $this->pdo->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    return "Erro";
        }
    }

    public function delete(){
        $sql = "DELETE FROM clientes WHERE nome = :nome";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome", "asjdkl");
            $stmt->execute();
    }



    //GETTERS AND SETTERS
    private function setHost($host){
        $this->host = $host;
    }

    private function setDbname($dbname){
        $this->dbname = $dbname;
    }

    private function setId($id){
        $this->id = $id;
    }

    private function setPassword($password){
        $this->password = $password;
    }

    private function getHost(){
        return $this->host;
    }

    private function getDbname(){
        return $this->dbname;
    }

    private function getId(){
        return $this->id;
    }

    private function getPassword(){
        return $this->password;
    }
}