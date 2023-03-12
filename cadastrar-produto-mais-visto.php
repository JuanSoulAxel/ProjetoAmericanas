<!DOCTYPE html>
<html lang="PT-BR">
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
        <h1>CADASTRAR PRODUTO MAIS VISTO</h1>
        <form class="cadastrarProduto2" method="POST" action="php/foto-produtos.php" enctype="multipart/form-data"> 
            <p>Produto:</p>
            <input type="file" name="produto" id="escolherProduto" required> <br> <br>
            
            <p>Descrição:</p>
            <input name="descricao" type="text" maxlength="100" required>

            <p>Preço Final:</p>
            <input name="preco_final" type="number" step="0.01" maxlength="10" required>  <!--O step permite pegar casas decimais-->
            
            <p>Porcentagem de Desconto:</p>
            <input name="porcentagem" type="number" maxlength="2" required> %

            <p>Parcelas:</p>
            <input name="parcelas" type="number"> x

            <p>Deseja cadastrar em:</p>
            <select name="tipo_produto" required>
                <option selected disabled value="">Selecione</option>
                <option value="maisvisto">Mais Visto</option>
                <option value="maisvendido">Mais Vendido</option>
                <option value="patrocinados">Patrocinados</option>
                <option value="oquevoceviu">O Que Você Viu</option>
                <option value="ofertas">Ofertas</option>
                <option value="melhoresdescontos">Melhores Descontos</option>
            </select>
            
            <button id="confirmar">CONFIRMAR</button>
        </form>
    </section>
</body>
</html>