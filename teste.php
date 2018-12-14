<?php
     //Arquivo de conexao do PHP com MySQL
     //Declaracao das variaveis locais

     $tabela_admin = "admin";
     $tabela_logins = "login";
     $tabela_produto = "produto";
     $tabela_clientes = "usuario";
     $tabela_produto = "produto";
     $tabela_categoria = "categoria";

     //Realizando a conexao com o MySQL
     $resultado_conexao = mysqli_connect("localhost", "root", "");

     //Verificando se a conexao foi realizada com sucesso
     if($resultado_conexao)
     {
          //Erro na conexão MySQL

          print('Erro!!! Conexão não realizada!!!');
          

     }
     else
     {
          //Conexão com MySQL realizada com sucesso
          //Selecionando banco de dados
          mysqli_select_db($databasename,$resultado_conexao);
     }
?>
