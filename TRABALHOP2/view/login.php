<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    
    <section class="conteudo-login">
            <section class="conteudo-formulario">
                <form id="form-login" method="POST" action="../processamento/processamento.php">
                    <label id="input-login">Entre</label>
                    <input id="input-login" type="text" placeholder="Email" name="inputEmailLogin">
                    <input id="input-login" type="password" placeholder="Senha" name="inputSenhaLogin">
                    <input id="botao-login" type="submit" value="ENTRE">
                </form>
                <p>Novo por aqui? <a href="cadastro.php">Cadastrar</a></p>
            </section>
        </section>

</body>
</html>