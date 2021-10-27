<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TECH</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include "conexaomysql.php";

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $data_nascimento = $_POST['data_nascimento'];

                $sql = "INSERT INTO clientes (nome, endereco, telefone, email, data_nascimento) 
                VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento')";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome cadastrado com sucesso!","success");
                } else
                mensagem("$nome NÃO cadastrado!","danger");
            ?>
            <hr>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>