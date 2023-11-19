<?php

session_start();
require "funcoesBD.php";

//Cadastro de editor
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

   $nome = $_POST['inputNome'];
   $sobrenome = $_POST['inputSobrenome'];
   $cpf = $_POST['inputCPF'];
   $email = $_POST['inputEmail'];
   $senha = $_POST['inputSenha'];
}

inserirCliente($cpf, $nome, $sobrenome, $email, $senha);
header('location: ../view/cadastro-editor.php');
die();

//Cadastro de noticia


//Cadastro de comentário

?>