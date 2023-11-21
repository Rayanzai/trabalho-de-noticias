<?php

session_start();
require "funcoesBD.php";

//Cadastro de editor
if(isset($_POST['cadastrar']) && !empty($_POST['inputNomeLog']) && !empty($_POST['inputSobrenomeLog']) && 
   !empty($_POST['inputCPFLog']) && !empty($_POST['inputEmailLog']) &&
   !empty($_POST['inputSenhaLog'])){

   $nome = $_POST['inputNomeLog'];
   $sobrenome = $_POST['inputSobrenomeLog'];
   $cpf = $_POST['inputCPFLog'];
   $email = $_POST['inputEmailLog'];
   $senha = $_POST['inputSenhaLog'];

   inserirEditor($cpf, $nome, $sobrenome, $email, $senha);
   header('location: ../view/login.php');
   die();
   }



//Cadastro de noticia
if(isset($_POST['cadastrar-noticia']) && !empty($_POST['titulo']) && !empty($_POST['data_publicacao']) && !empty($_POST['corpo_noticia'])){
   $titulo = $_POST['titulo'];
   $data_publicacao = $_POST['data_publicacao'];
   $corpo_noticia = $_POST['corpo_noticia']
   $imagem_noticia = $_POST['imagem_noticia'];
   
   inserirNoticia($titulo, $data_publicacao, $corpo_noticia, $imagem_noticia);
   header('location: ../view/cadastro-noticia.php');
   die();
}

//Cadastro de comentário
if(isset($_POST['cadastrar-comentario']) && !empty($_POST['corpo_comentario'])){
   $comentario = $_POST['corpo_comentario'];

   inserirComentario($comentario);
   header('location: ../view/noticia.php');
   die();
}

// Cadastro Trabalhe conosco
if (isset($_POST['submit-trabalhe-conosco']) && !empty($_POST['inputNomeLog']) && !empty($_POST['inputSobrenomeLog']) && 
!empty($_POST['inputCPFLog']) && !empty($_POST['inputEmailLog']) &&
!empty($_POST['inputSenhaLog']) && !empty($_POST['breve-curriculo'])) {
   $nome_trabalho = $_POST['inputNomeLog'];
   $sobrenome_trabalho = $_POST['inputSobrenomeLog'];
   $cpf_trabalho = $_POST['inputCPFLog'];
   $email_trabalho = $_POST['inputEmailLog'];
   $breve_curriculo = $_POST['breve-curriculo'];

   inserirEditor($nome_trabalho, $sobrenome_trabalho, $cpf_trabalho, $email_trabalho, $breve_curriculo);
   header('location: ../view/login.php');
   die();
}

//Login
if (isset($_POST['login']) && !empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog'])){
   $email = $_POST['inputEmailLog'];
   $senha= $_POST['inputSenhaLog'];

   liberarLogin($email, $senha);
}
?>