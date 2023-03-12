<?php
//esse foi criado com intuito de diminuir a codagem, pois estava muito repetido esses itens
    $result2 = "SELECT * FROM produto_mais_visto WHERE tipo = '$tabela';"; //consultando o banco de dados
    $result2 = $pdo->prepare($result2);
    $result2->execute();

    while ($dados2 = $result2->fetch(PDO::FETCH_ASSOC)) { //vai pegar todos os dados do banco e vai listar todos formando assim diversas divs com todos os produtos
    
    $imgProduto2 = "produtos-cadastrados/produtos-mais-vistos/" . $dados2['nome_produto']; //pegando o diretório da imagem do produto
    
    $preco = str_replace(',', '.', $dados2['preco']); //vai trocar a vírgula por ponto, pra calcular em php
    $preco = floatval($preco); //transformei aqui de string pra float
    $parcelas = floatval($dados2['parcelas']); //transformei aqui de string pra float
    $valor_cada_parcela = $preco / $parcelas; //os valores coloquei em string no banco, então, com php, vou transformar eles em float e pelo número de parcelas pra saber qual o valor de cada parcela
    $valor_cada_parcela = number_format($valor_cada_parcela, 2, '.', ''); //pegar só duas casas decimais
    $valor_cada_parcela = str_replace('.', ',', $valor_cada_parcela); //vai trocar o ponto por vírgula pra ficar visivelmente mais bonito
?>
    <div class="swiper-slide card">
        <div id="item" class="image">
            <div id="parte1item">
                <img src="<?php echo $imgProduto2 ?>" alt="">
            </div>
            <div id="parte2item">
                <p id="maisvistos-descricao"> <?php  echo $dados2['descricao'];?> </p> <br>
                <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br> <br> <br>
                <label id="lblPrecoAntigo2"> R$ <?php echo $dados2['preco_antigo']; ?></label>  &nbsp;
                <label id="porcentagem2">⤥ <?php echo $dados2['porcentagem']; ?>%</label> <br>
                <label id="lblPreco2"> R$ <?php echo $dados2['preco']; ?></label> 
                <p id="parcelamento"><?php echo $dados2['parcelas']; ?>x de R$ <?php echo $valor_cada_parcela; ?> sem juros no cartão de crédito</p>
            </div>
        </div>
    </div>
<?php
    }
?>