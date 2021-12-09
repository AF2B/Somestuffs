<?php

declare(stricts_type = 1);

$pdo = require 'conexao.php';
$sql = 'select * from produtos';

foreach ($pdo->query($sql) as $key => $value) {
  echo 'id: ' . $value['id'] . '\n Descrição: ' . $value['descricao'];
}

?>
