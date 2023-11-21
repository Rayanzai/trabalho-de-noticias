<?php
function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "","trabalhonoticia");
    return($conexao);
}

function inserirEditor($cpf, $nome, $sobrenome, $email, $senha){
    $conexao = conectarBD();
    $inserir_editor = "INSERT INTO editor (PK_cpf, nome, sobrenome, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$email', '$senha')";

    mysqli_query($conexao, $inserir_editor);
}

function inserirNoticia($titulo, $data_publicacao, $corpo_noticia, $imagem_noticia){
    $conexao = conectarBD();
    $inserir_noticia = "INSERT INTO noticia(titulo, data_publicacao, corpo_noticia, imagem_noticia) VALUES ('$titulo, '$data_publicacao', '$corpo_noticia', '$imagem_noticia')";
    
    mysqli_query($conexao, $inserir_noticia);
}

function inserirComentario($comentario){
    $conexao = conectarBD();
    $inserir_comentario = "INSERT INTO comentario(corpo_comentario) VALUES ($comentario)";

    mysqli_query($conexao, $inserir_comentario);
}


// CONSULTADO TODAS AS NOTICIAS
function gerenciarNoticias(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM noticia";
    $listaNoticias = mysqli_query($conexao, $consulta);
    return $listaNoticias;
}

// //Exibir COMENTARIO
// function ExibirComentario(){
//     $conexao = conectarBD();
//     $consulta = "SELECT "
// }

// LIBERAR LOGIN
function liberarLogin($email, $senha){
    $conexao = conectarBD();

    $query = "SELECT * FROM editor WHERE email = '$email' AND senha = '$senha'";
    $executar = mysqli_query($conexao, $query);
    $return = mysqli_fetch_assoc($executar);

    if (!empty($return['email']) && !empty($return['senha'])) {
        header("location: ../view/noticia.php");
    }
    else{
        echo "Usuário e senha não encontrados";
        header("location: ../view/login.php");
    }
}

?>