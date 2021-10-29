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

<?php

    include "db/conexao.php"
    $id = $_POST['id'] ?? '';
    $sql = "SELECT * FROM clientes WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alterar Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'];?>">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone'];?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="dt_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dt_nascimento" value="<?php echo $linha['dt_nascimento'];?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar alterações">
                    </div>
                </form>
                <a href="index.php" class="btn btn-info">Voltar para o Início</a>
            </div>
        </div>
    </div>
</body>

</html>