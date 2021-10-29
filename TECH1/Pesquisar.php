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
    <!--<?php 
        /*if(isset($_POST['Buscar'])){
            $pesquisar = $_POST['Buscar'] ?? '';

        include "db/conex%C3%A3omysql.php";

        $sql = "SELECT * FROM tb_usuario WHERE nome LIKE '%$pesquisar%'";

        $dados = mysqli_query($conn, $sql);

        while($linha = mysqli_fetch_assoc($dados)){
            echo "Nome: ".$linha['nome']."<br>";
            echo "Email: ".$linha['email']."<br>";
            echo "Senha: ".$linha['senha']."<br>";
            echo "<hr>";
        }
        }*/
    ?>-->

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="Pesquisar.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search"
                                name="Buscar" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                            while ($linha = mysqli_fetch_assoc($dados)){
                                $cod_pessoa = $linha['cod_pessoa'];
                                $nome = $linha['nome'];
                                $endereco = $linha['endereco'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $data_nascimento = $linha['data_nascimento'];
                                $data_nascimento = mostra_data($data_nascimento);

                                echo "<tr> 
                                        <th scope='row'>$nome</th>
                                        <td>$nome</td>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        <td>$email</td>
                                        <td>$data_nascimento</td>
                                        <td width=150px>
                                        <a href='Edit_cadastro.php?id=$cod_pessoa' class='btn btn-primary btn-sm'>Editar</a>
                                        <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modal_confirma'
                                        onclick=" .'"' ."Excluir($cod_pessoa, '$nome')" .'"' .">Excluir</a>
                                        
                                        </td>
                                        
                                        <td><a href='Editar.php?cod_pessoa=$cod_pessoa'>Editar</a></td>
                                        <td><a href='Excluir.php?cod_pessoa=$cod_pessoa'>Excluir</a></td>        
                                    </tr>";
                            }
                        ?>

                    </tbody>
                </table>

                <a href="index.php" class="btn btn-info">Voltar para o início</a>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="modal_confirma">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmação de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="Excluir.php?" method="POST"
        <p>Deseja realmente excluir <b id="nome_pessoa">Nome da Pessoa</b>?</p 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="id" id="cod_pessoa" value="">
        <input type="hidden" name="nome" id="nome_pessoa1" value="">
        <input type="submit" class="btn btn-danger">Sim</input>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function excluir(id, nome){
        document.getElementById('cod_pessoa').value = id;
        document.getElementById('nome_pessoa1').value = nome;
        document.getElementById('nome_pessoa').innerHTML = nome;
    }
</script>

</body>

</html>