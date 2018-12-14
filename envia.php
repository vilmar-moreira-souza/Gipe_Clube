<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title>envia</title>
  </head>
  <body>


<?php
$host ="localhost";
$user = "root";
$pass = "";//defini essa senha
$banco ="cadastro";
$conexao = mysqli_connect($host,$user,$pass) or die(mysql_error());
mysqli_select_db($banco,$conexão) or die(mysql_error());

 ?>

<?php

  $nome =  $_POST["nome"];
  $email =  $_POST["email"];
  $mensagem = $_POST["mensagem"];

if(($_POST['email'] != "") and ($_POST['mensagem'] != "")and ($_POST['nome'] != "")){   // se formulario preenchido -nao vazio
   echo("capturado");
       require("index.html");
       $sql = mysql_query("INSERT INTO usuarios(nome,email,mensagem)VALUES('$nome,$email,$mensagem')");
     }
else{
      echo(" nao capturado");
       require("index.html");
}

?>

</body>
</html>
