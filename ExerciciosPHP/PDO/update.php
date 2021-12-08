<?php

declare(strict_types = 1);

$pdo = require 'conexao.php';
$sql = 'UPDATE produtos SET descricao = ? WHERE id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();
