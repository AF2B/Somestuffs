<?php

declare(strict_types = 1);

$pdo = require 'conexao.php';
$sql = 'DELETE FROM produtos WHERE id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']);
$prepare->execute();
