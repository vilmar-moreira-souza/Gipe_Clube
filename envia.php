<?php
  $nome =  $_POST["nome"];
  $email =  $_POST["email"];
  $mensagem = $_POST["mensagem"];

if(($_POST['email'] != "") and ($_POST['mensagem'] != "")and ($_POST['nome'] != "")){   // se formulario preenchido -nao vazio
   echo("capturado");
       require("index.html");
     }
else{
      echo(" nao capturado");
       require("index.html");
}

?>
