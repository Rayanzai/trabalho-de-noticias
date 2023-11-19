<?php
function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "","trabalho-noticia");
    return($conexao);
}

function inserirEditor($cpf, $nome, $sobrenome, $email, $senha){
    $conexao = conectarBD();
    $inserir_editor = "INSERT INTO editor (cpf, nome, sobrenome, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$email', '$senha')";

    mysqli_query($conexao, $inserir_editor);
}

function inserirNoticia($idnoticia, $titulo, $data_publicacao, $imagem_noticia){
    $conexao = conectarBD();
    $inserir_noticia = "INSERT INTO noticia(titulo, data_publicacao, imagem_noticia) VALUES ('$titulo, '$data_publicacao', '$imagem_noticia')";
    
    mysqli_query($conexao, $inserir_noticia);
}

function inserirComentario($comentario, $fk_idnoticia){
    $conexao = conectarBD();
    $inserir_comentario = "INSERT INTO comentario(comentario) VALUES ($comentario)";

    mysqli_query($conexao, $inserir_comentario);
}

// function retornarClientes(){
//     $conexao = conectarBD();
//     $consulta = "SELECT * FROM cliente";
//     $listaClientes = mysqli_query($conexao, $consulta);
//     return $listaClientes;
// }

?>