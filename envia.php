<!DOCTYPE html>
<!-- http://localhost/phpmyadmin/sql.php  ACESSO AO phpmyadmin-->
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title>envia</title>
  </head>
  <body>


<?php
$host ="localhost";
$user = "root";// NOME PADRAO DO XAMPP
$pass = "";//XAMPP NAO USA SENHA
$banco ="cadastro";
$conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error());

 ?>

<?php

  $nome =  $_POST["nome"];
  $email =  $_POST["email"];
  $mensagem = $_POST["mensagem"];

if(($_POST['email'] != "") and ($_POST['mensagem'] != "")and ($_POST['nome'] != "")){   // se formulario preenchido -nao vazio
       $sql = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,mensagem)VALUES('$nome,$email,$mensagem')");
       mysqli_close($conexao);
       echo("capturado");
       require("index.html");
     }
else{
      echo(" nao capturado");
       require("index.html");
}

?>

</body>
</html>
