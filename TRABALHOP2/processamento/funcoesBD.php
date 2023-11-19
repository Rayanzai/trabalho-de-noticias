<?php
function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "","xhopii");
    return($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$dataNasc', '$telefone', '$email', '$senha')";

    mysqli_query($conexao, $consulta);
}

function retornarClientes(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return $listaClientes;
}

?>