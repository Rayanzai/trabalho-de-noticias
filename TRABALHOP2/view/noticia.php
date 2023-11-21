<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-login.css">
    <link rel="stylesheet" href="../css/noticia.css">
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

    <section class="container-conteudo">
        <div class = noticia-img>
            <p>imagem da noticia:</p>
            <img src="" alt="">
        </div>

        <div class="conteudo-noticia">
            <h1>Titulo noticia</h1>
            <p>conteudo noticia</p>
        </div>
    </section>

    <section class="secao-comentarios">
        <div class="enviar-comentario">
            <form id="form-log" method="POST" action="">
                <textarea name="comentario" id="comentario-log"></textarea>
                <input id="botao-log" type="submit" value="Enviar">
            </form>
        </div>

        <!-- mostrar outros comentarios -->

    </section>
</body>
</html>