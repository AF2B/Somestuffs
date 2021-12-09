<?php


//Conexão com  o banco de dados
try{
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "123456");
}catch(Exception $e){
    echo "Não foi possível conectar ao banco de dados " . $e->getMessage();
}

//Insert bindValues
$sql = "INSERT INTO clientes (nome, email, contato) VALUES (:nome, :email, :contato)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", "asjdkl");
$stmt->bindValue(":email", "qpokqpokd@qpowkdqpo");
$stmt->bindValue(":contato", "akposk");
$stmt->execute();


//Insert bindParam
$sql = "INSERT INTO clientes (nome, email, contato) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $contato);


//Read
$sql = "SELECT * FROM clientes";
$stmt = $pdo->prepare($sql);
$stmt->execute();

if($stmt->execute()){
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}


//Update
$sql = "UPDATE FROM clientes SET nome = :nome WHERE id = 1";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome" , "abcde");
$stmt->execute();


//Delete
$sql = "DELETE FROM clientes WHERE nome = :nome";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", "asjdkl");
$stmt->execute();


/*$result = $stmt->fetchAll();
print_r($result);*/


//A diferença entre fetch e o fetchAll é que fetch é um array simples enquanto o fetchAll é um array multidimensional, também conhecido como matriz.
//Fetch usa-se quando queremos retornar apenas um único valor. Já o fetchAll usamos quando queremos retornar diversos valores. Usamos o foreach em cima dele, por exemplo:

/*foreach($codigos as $item){
    echo $item["codigo"];
}*/