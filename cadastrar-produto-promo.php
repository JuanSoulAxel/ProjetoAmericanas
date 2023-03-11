<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto construção do site Americanas">
    <meta name="keywords" content="Americanas, Site de Compras, Site Comercial">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Juan Axel">

    <link rel="stylesheet" href="css/cad.css" type="text/css"/>

    <title>Americanas - Cadastrar Produto</title>
    <link rel="icon" href="img/logo-title.png">
</head>
<body>
    <section>
        <h1>CADASTRO DE PRODUTO</h1>
        <form class="cadastrarProduto" method="POST" action="php/foto-produto.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <p>Produto:</p>
            <input type="file" name="produto" id="escolherProduto" required> <br> <br>
            
            <p>Descrição:</p>
            <input name="descricao" type="text" maxlength="100" required>

            <p>Preço:</p>
            <input name="preco" type="text" maxlength="10" required>  
            
            <p>Porcentagem de Desconto:</p>
            <input name="porcentagem" type="text" maxlength="2" required> %

            <button id="confirmar">CONFIRMAR</button>
        </form>
    </section>
</body>
</html>