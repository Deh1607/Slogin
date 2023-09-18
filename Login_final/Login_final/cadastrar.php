<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$inserir = "INSERT INTO usuarios values('','$nome','$email','$senha')";

$queryCadastro = mysqli_query($mysqli,$inserir);

header("location:cadastro.php");

?>