<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-login.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    
    <header>
        <h1>WOW News</h1>
        <div class="cabecalho">
            <ul>
            
                <li><a href="">Home</a></li>
                <li><a href="">Notícias</a></li>
                <li><a href="">Categoria</a></li>
                
            </ul>
        </div>
    </header>

    <section class="container-login">
        <section class="caixa-login">
            <section class="conteudo-formulario">
                <h3>Login</h3>
                <form id="form-log" method="POST" action="../processamento/processamento.php">
                    <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                    <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                    <input id="botao-log" type="submit" value="ENTRE" name="login">
                </form>
                <?php
                    if(isset($_POST['login'])){
                        LiberarLogin($email, $senha);
                    }
                ?>
                <p>Não possui Login? <a href="../view/cadastro.php">Cadastre-se</a></p>
            </section>
        </section>
    </section>

    <script src="https://kit.fontawesome.com/09a77a43d5.js" crossorigin="anonymous"></script>
</body>
</html>