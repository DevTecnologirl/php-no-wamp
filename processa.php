<?php
//sessao cor verde
session_start();

//banco de dados
include_once("conexao.php");

//receber dados
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); //filter limpa os dados do formulario
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

//CRIANDO A QUERY
$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())"; 
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn))
{
  /* variavel local*/  $_SESSION['msg'] = "<p style='color:green;'>USUARIO CADASTRADO COM SUCESSO </p><br>";
    header("Location: index.php");
}
else
{
    header("Location: index.php"); 
      /* variavel local*/  $_SESSION['msg'] = "<p style='color:red;'>USUARIO NAO FOI CADASTRADO COM SUCESSO </p><br>";

}
?>