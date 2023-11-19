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

inserirEditor($cpf, $nome, $sobrenome, $email, $senha);
header('location: ../view/cadastro-editor.php');
die();

//Cadastro de noticia
if(!empty($_POST['titulo']) && !empty($_POST['data_publicacao']) && !empty($_POST['corpo_noticia'])){
   $titulo = $_POST['titulo'];
   $data_publicacao = $_POST['data_publicacao'];
   $corpo_noticia = $_POST['corpo_noticia']
   $imagem_noticia = $_POST['imagem_noticia'];
}

inserirNoticia($titulo, $data_publicacao, $corpo_noticia, $imagem_noticia);
header('location: ../view/cadastro-noticia.php');
die();


//Cadastro de comentário
if(!empty($_POST['corpo_comentario'])){
   $comentario = $_POST['corpo_comentario'];
}

inserirComentario($comentario);
header('location: ../view/noticia.php');
die();


?>