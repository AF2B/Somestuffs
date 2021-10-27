<?php 

    abstract class Conexao{



        protected function conectar(){

            try {
                $conn = new PDO("pgsql:host=localhost;<port:5432></port:5432>;dbname=loja;user=seuUsuario;password=suaSenha");
                $conn->exec('set names utf8');
                return $conn;

            } catch (PDOException $e) {

                echo $e->getMessage();
            }
            catch (PDOException $e) {

                echo $e->getMessage();
            }

        }

    }
 ?>