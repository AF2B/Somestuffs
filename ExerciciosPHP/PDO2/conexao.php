<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

/*para efetuar uma conexão PDO com o banco de dados se é criado uma var q será inserida nela a conexão via instancia da classe PDO, não esquecer do "die();" mais a frente explicado.
PDOEXCEPTION mostra o erro especificadamente com o banco. <> Exception "generico"
$conn = new PDO()
*/

/**/