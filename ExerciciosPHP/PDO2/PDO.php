<?php

//Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Habilita o modo de exibição de erros
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

/*para efetuar uma conexão PDO com o banco de dados se é criado uma var q será inserida nela a conexão via instancia da classe PDO, não esquecer do "die();" mais a frente explicado.
PDOEXCEPTION mostra o erro especificadamente com o banco. <> Exception "generico"
$conn = new PDO()
*/

//Insert no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
$stmt = $pdo->prepare($sql); //Prepara a query para ser executada no banco de dados
$stmt->bindValue(":nome", "teste"); //Prepara o valor para ser inserido no banco de dados
$stmt->bindValue(":email", "teste@hotmail.com"); //Prepara o valor para ser inserido no banco de dados
$stmt->bindValue(":senha", "123456"); //Prepara o valor para ser inserido no banco de dados
$stmt->execute(); //Executa a query

//Select no banco de dados
$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$fetchUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //FetchAll retorna um array associativo

//Exibindo os usuários
foreach($fetchUsuarios as $usuario){
    echo $usuario['nome'] . "<br>";
    echo $usuario['email'] . "<br>";
    echo $usuario['********'] . "<br>";
}

