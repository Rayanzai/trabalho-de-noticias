<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-login.css">
    <link rel="stylesheet" href="../css/trabalheConosco.css">
    <title>WOW News</title>
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

    <section class="container-cadastro">
        <section class="caixa-cadastro">
            <section class="conteudo-formulario">
                <h3>Trabalhe conosco</h3>
                <form id="form-log" method="POST" action="">
                    <input id="input-log" type="name" placeholder="Nome" name="inputNomeLog">
                    <input id="input-log" type="name" placeholder="Sobrenome" name="inputSobrenomeLog">
                    <input id="input-log" type="cpf" placeholder="CPF" name="inputCPFLog">
                    <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                    <label id="label-curriculo">Breve curriculo:</label>
                    <textarea name="breve-curriculo" id="curriculo-log"></textarea>
                    <input id="botao-log" type="submit" value="Enviar">
                </form>
            </section>
        </section>
    </section>
</body>
</html>