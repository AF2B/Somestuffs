<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "";

    if ($conn = mysqli_connect($server, $user, $password, $bd)){
        echo "Conexão realizada com sucesso!";
    } else
        echo "Falha na conexão!";


        function mensagem($texto, $tipo) {
            echo "<div class='alert alert-$tipo' role='alert'>
                $texto</div>";
        }
?>