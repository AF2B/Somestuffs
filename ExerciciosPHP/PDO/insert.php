<?php

declare(stricts_type = 1);

$pdo = require 'conexao.php';
$sql = 'INSERT INTO produtos(descricao) VALUES(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo prepare->rowCount();
