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


/*
A diferença entre exec(); e execute();
exec(); -> tem que se trabalhar direto na string, exemplos a seguir...
execute(); -> podemos passar parametros, exemplos a seguir...

$nome = "FulanoDeTal";
$sexo = "M";
$data_nascimento = date('Y-m-d');
$idade = 99;
$email = abcde@abcmail.com

Exemplo exec(); -> $sql = $pdo->exec("INSERT INTO clientes (nome, sexo, data_nascimento) VALUES ('$nome', '$sexo', '$data')");
echo "Linhas afetadas: " . $sql;

Exemplo exec(); 2 -> $sql = $pdo->exec("DELETE FROM clientes WHERE nome = 'Fulano'");


Exemplo execute(); -> $sql = "INSERT INTO clientes (nome, sexo, data_nascimento) VALUES(:nome, :sexo, :data_nascimento)";
$stmt = $this->pdo->prepare($sql);
$stmt->bindValue(":nome", "fulanoDeTal");
$stmt->bindValue(":sexo", "M");
$stmt->bindValue(":data_nascimento", "99/99/9999");

Para ele, você precisa parametrizar "a coisa".

Exemplo2 execute(); ->

$sql = "INSERT INTO pessoa (nome, idade, email) VALUES (?, ?, ?)";
$stmt = $this->pdo->prepare($sql);
$result = $stmt->execute(array($nome, $sexo, $data));

Exemplo3 execute();
$sql = "INSERT INTO pessoa (nome, idade, email) VALUES (:nome, :idade, :email)";
stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", "Fulaninho");
$stmt->bindValue(":idade", "99");
$stmt->bindValue(":email", "fulaninho@fulanoDeTal.com");
$stme->execute();

Exemplo4 execute();
$sql = "INSERT INTO pessoa (nome, idade, email) VALUES (:nome, :idade, :email)";
$stmt= $pdo->prepare($sql);
$result = $stmt->execute(array(':nome' => $nome, ':idade' => $idade, ':email' => $email));

/////////////////////////////////////////////////////////////////////////////////////////////
Exemplo fetchAll -> 
$sql = "SELECT nome, sexo FROM pessoas";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, "Fulano");
$stmt->execute();
$result = $stmt->fetchAll();

*/

/*exemplo usando fetchAll
$sql = "SELECT nome, sexo FROM pessoas WHERE nome = ? AND sexo = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, "Fulano");
$stmt->bindValue(2, "M");
$stmt->execute();
$result = $stmt->fetchAll();
*/

/*
procedures e functions com PDO, banco de dados relacional, SQL

...
*/