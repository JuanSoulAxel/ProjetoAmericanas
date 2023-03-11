<?php
    require "php/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto construção do site Americanas">
    <meta name="keywords" content="Americanas, Site de Compras, Site Comercial">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Juan Axel">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/swiper.css" type="text/css"/>
    <script src="js/script.js" defer></script> <!--defer é pra o script ser carregado depois do documento-->

    <title>Americanas - tudo, a toda hora, em qualquer lugar :) </title>
    <link rel="icon" href="img/logo-title.png">
</head>
<body>
    <header id="cabecalho">
        <div id="cab-p1"> <!--CABEÇALHO PARTE 1-->
            <img src="img/cabecalho-p1.webp">
        </div>  

        <div id="cab-p2"> <!--CABEÇALHO PARTE 2-->
            <img src="img/nome-americanas.png" id="nome-logo" alt="Nome Logo">
            <input id="inpBusca" type="text" placeholder="busque aqui seu produto">
            <img id="lupa" src="img/lupa-input.png" alt="">
            <div id="p2-login">
                <img src="img/usuario-login.png" alt="Foto Usuário"> &nbsp;
                <p>olá, faça seu login <br> ou cadastre-se</p>
                <img id="acentocircun" src="img/icone-circun-inverso-branco.png" alt="">
            </div>
            <div id="p2-icones">
                <img id="icone-loja" src="img/icone-loja.png" alt="Icone Loja">
                <img id="icone-coracao" src="img/icone-coracao.png" alt="Icone Coração">
                <img id="icone-cesta" src="img/icone-cesta.png" alt="Icone Cesta">
            </div>
            <div id="p2-cep">
                <img src="img/icone-localizacao.png" alt="Icone Localização"> &nbsp;
                <p>informe seu CEP</p>
            </div>
            <nav id="p2-menu">
                <ul>
                    <li> <a href="#">pra sua empresa</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">baixe o app</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">entrega rápida</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">nossas lojas</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">ame digital</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">marcas próprias</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">lojas oficiais</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#">serviços</a></li> &nbsp; &nbsp; &nbsp;
                    <li> <a href="#"><img id="adeamericanas" src="img/adeamericanas.png"> oferta do dia </a></li> &nbsp; &nbsp; &nbsp;
                </ul>
            </nav>
        </div>

        <div id="cabecalho-p3"> <!--CABEÇALHO PARTE 3-->
            <div id="p3-departamentos">
                <label onmouseover="mudarImagem();" onmouseout="voltarImagem();" id="lbl-departamentos">☰ todos os departamentos</label>
                <img onmouseover="mudarImagem();" onmouseout="voltarImagem();" id="acentocircun2" src="img/icone-circun-inverso.png" alt="">
            </div>
            <div id="p3-menu-departamentos">
                <div>
                    <h1>eletrônicos</h1>
                    <h2>celulares e smartphones</h2>
                    <h2>tv e vídeo</h2>
                    <h2>consoles e games</h2>
                    <h2>áudio</h2>
                    <h2>câmeras e drones</h2>
                    <h2>telefonia fixa</h2>
                </div>
                <div>
                    <h1>informática e acessórios</h1>
                    <h2>informática</h2>
                    <h2>acessórios e periféricos</h2>
                    <h2>pc gamer</h2>
                </div>
                <div>
                    <h1>comércio e segurança</h1>
                    <h2>agro, indústria e comércio</h2>
                    <h2>sinalização e segurança</h2>
                </div>
                <div>
                    <h1>casa</h1>
                    <h2>eletrodomésticos</h2>
                    <h2>ar e ventilação</h2>
                    <h2>móveis e decoração</h2>
                    <h2>casa e construção</h2>
                    <h2>utilidades domésticas</h2>
                    <h2>cama, mesa e banho</h2>
                </div>
                <div>
                    <h1>lazer e entretenimento</h1>
                    <h2>livros</h2>
                    <h2>instrumentos musicais</h2>
                    <h2>música</h2>
                    <h2>filmes e séries</h2>
                    <h2>artigos de festas</h2>
                    <h2>artesanato</h2>
                </div>
                <div>
                    <h1>pra você e sua família</h1>
                    <h2>mercado</h2>
                    <h2>automotivo</h2>
                    <h2>brinquedos</h2>
                    <h2>bebês</h2>
                    <h2>gift cards</h2>
                    <h2>pet shop</h2>
                    <h2>malas, mochilas e acessórios</h2>
                    <h2>papelaria</h2>
                    <h2>vale presente</h2>
                </div>
                <div>
                    <h1>esporte, saúde e bem-estar</h1>
                    <h2>esporte, fitness e lazer</h2>
                    <h2>saúde e bem-estar</h2>
                    <h2>suplementos e vitaminas</h2>
                    <h2>roupas e acessórios esportivos</h2>
                </div>
                <div>
                    <h1>moda e beleza</h1>
                    <h2>beleza e perfumaria</h2>
                    <h2>moda</h2>
                    <h2>relógios</h2>
                </div>
                <div>
                    <h1>pra sua empresa</h1>
                    <h2>Americanas Empresas</h2>
                    <h2>cotações online</h2>
                    <h2>soluções corporativas</h2>
                    <h2>receba em 3 horas</h2>
                </div>
                <div>
                    <h1>confira também</h1>
                    <h2>serviços</h2>
                    <h2>sustentabilidade</h2>        
                </div>
            </div>
            <nav id="p3-menu">
                <ul>
                    <li> <a class="p" href="#">mercado</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-cel" class="p" href="#">celulares</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-eled" href="#">eletrodomésticos</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-inf" class="p" href="#">informática</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-tvht" href="#">tv e home theater</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-elep" href="#">eletroportáteis</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-mov" class="p" href="#">móveis </a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-belper" href="#">beleza e perfumaria</a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li> <a id="mout-pasc" class="p" href="#">páscoa</a> </li> &nbsp; &nbsp; &nbsp;
                </ul>
            </nav>
            <div id="p3-menu-escondido1"> <!--OS 8 MENUS ESCONDIDOS-->
                <ul>
                    <li> <a href="#">ver tudo em celulares</a> </li>
                    <li> <a href="#">smartphones</a> </li>
                    <li> <a href="#">iphones</a> </li>
                    <li> <a href="#">tecnologia 5g</a> </li>
                    <li> <a href="#">acessórios pra celular</a> </li>
                    <li> <a href="#">celulares básicos</a> </li>
                    <li> <a href="#">peças pra celular</a> </li>
                    <li> <a href="#">smartwatch e smartband</a> </li>    
                </ul>
                <img src="img/cabecalho-p3-menu-celulares.webp" alt="">
            </div>
            <div id="p3-menu-escondido2">
                <ul>
                    <li> <a href="#">ver tudo em eletrodomésticos</a></li>
                    <li> <a href="#">aquecedores</a></li>
                    <li> <a href="#">geladeira</a></li>
                    <li> <a href="#">máquina de lavar</a></li>
                    <li> <a href="#">fogão</a></li>
                    <li> <a href="#">micro-ondas</a></li>
                    <li> <a href="#">lava e seca</a></li>
                    <li> <a href="#">ar e ventilação</a></li>
                </ul>
                <ul>
                    <li class="p3-m-esc2-descer"> <a href="#">cooktop</a></li>
                    <li> <a href="#">freezer</a></li>
                    <li> <a href="#">forno de embutir</a></li>
                    <li> <a href="#">lava-louças</a></li>
                    <li> <a href="#">coifa e depurador de ar</a></li>
                    <li> <a href="#">cervejeira</a></li>
                    <li> <a href="#">peças pra eletrodomésticos</a></li>
                </ul>
                <img src="img/cabecalho-p3-menu-eletrodomesticos.webp" alt="">
            </div>
            <div id="p3-menu-escondido3">
                <ul>
                    <li><a href="#">ver tudo em informática</a></li>
                    <li><a href="#">notebook</a></li>
                    <li><a href="#">notebook gamer</a></li>
                    <li><a href="#">computador</a></li>
                    <li><a href="#">computador gamer</a></li>
                    <li><a href="#">tablet</a></li>
                    <li><a href="#">acessórios e periféricos</a></li>
                </ul>
                <img src="img/cabecalho-p3-menu-informatica.webp" alt="">
            </div>
            <div id="p3-menu-escondido4">
                <ul>
                    <li><a href="#">ver tudo em tv e home theater</a></li>
                    <li><a href="#">tv</a></li>
                    <li><a href="#">home theater</a></li>
                    <li><a href="#">acessórios pra tv e vídeo</a></li>
                </ul>
                <img src="img/cabecalho-p3-menu-tvehome.webp" alt="">
            </div>
            <div id="p3-menu-escondido5">
                <ul>
                    <li> <a href="#">ver tudo em eletroportáteis</a></li>
                    <li> <a href="#">fritadeira elétrica</a></li>
                    <li> <a href="#">aspirador de pó</a></li>
                    <li> <a href="#">purificador de água</a></li>
                    <li> <a href="#">forno elétrico</a></li>
                    <li> <a href="#">cafeteira</a></li>
                    <li> <a href="#">liquidificador/a></li>
                </ul>
                <ul id="dandomargin-escondido5">
                    <li> <a href="#">máquina de costura</a></li>
                    <li> <a href="#">processador de alimentos</a></li>
                    <li> <a href="#">grill, sanduicheira e torradeira</a></li>
                    <li> <a href="#">batedeira</a></li>
                    <li> <a href="#">ferro de passar</a></li>
                    <li> <a href="#">mixer</a></li>
                </ul>
                <img src="img/cabecalho-p3-menu-eletroportateis.webp" alt="">
            </div>
            <div id="p3-menu-escondido6">
                <ul>
                    <li><a href="#">ver tudo em móveis</a></li>
                    <li><a href="#">armário</a></li>
                    <li><a href="#">painel pra tv</a></li>
                    <li><a href="#">sofá</a></li>
                    <li><a href="#">colchão</a></li>
                    <li><a href="#">cama</a></li>
                    <li><a href="#">cadeira de escritório</a></li>
                    <li><a href="#">mesa de escritório</a></li>
                </ul>
                <ul id="dandomargin-escondido6">
                    <li id="p3-me6-descer"><a href="">sala de jantar</a></li>
                    <li><a href="">cadeira</a></li>
                    <li><a href="">poltrona</a></li>
                    <li><a href="">cozinha modulada</a></li>
                    <li><a href="">cozinha compacta</a></li>
                    <li><a href="">quarto completo</a></li>
                    <li><a href="">decoração</a></li>                   
                </ul>
                <img src="img/cabecalho-p3-menu-moveis.webp" alt="">
            </div>
            <div id="p3-menu-escondido7">
                <ul>
                    <li><a href="#">ver tudo em beleza e perfumaria</a></li>
                    <li><a href="#">cabelos</a></li>
                    <li><a href="#">perfume</a></li>
                    <li><a href="#">dermocosméticos</a></li>
                    <li><a href="#">salão de beleza</a></li>
                    <li><a href="#">maquiagem</a></li>
                    <li><a href="#">unha</a></li>
                    <li><a href="#">barbearia</a></li>   
                </ul>
                <img src="img/cabecalho-p3-menu-belezaeperfume.webp" alt="">
            </div>
            <div id="p3-menu-escondido8">
                <ul>
                    <li><a href="#">ver tudo em páscoa</a></li>
                    <li><a href="#">ovos de páscoa</a></li>
                    <li><a href="#">caixa de bombom</a></li>
                    <li><a href="#">barra de chocolate</a></li>
                    <li><a href="#">ovo de páscoa infantil</a></li>
                    <li><a href="#">decoração de páscoa</a></li>
                    <li><a href="#">colomba pascal</a></li>
                </ul>
                <img src="img/cabecalho-p3-menu-pascoa.webp" alt="">
            </div>      
        </div>
    </header>

    <section id="corpo">
        <div id="cor-p1"> <!--CORPO PARTE 1-->
            <img src="img/baixe-o-app-e-aproveite.webp" alt="">
        </div>
        
        <div id="cor-p2-carrossel" class="swiper mySwiper container"> <!--CORPO PARTE 2-->
            <div id="carrossel-wrapper" class="swiper-wrapper content">
                <div class="swiper-slide card"> <!--As próximas 8 divs são os cartazes pra fazer o carrossel-->
                    <div class="image">
                        <img src="img/corpo-carrossel1.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel2.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel3.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel4.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel5.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel6.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel7.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="image">
                        <img src="img/corpo-carrossel8.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="botao-next" class="swiper-button-next"> </div>
        <div id="botao-prev" class="swiper-button-prev"> </div>
        <div id="paginacao" class="swiper-pagination"> </div>

        <div id="cor-p3"> <!--CORPO PARTE 3-->
            <img src="img/super-ofertas-com-entrega.webp" alt="">
        </div>

        <div id="cor-p2-carrossel" class="swiper mySwiper2 container"> <!--CORPO PARTE 4-->
            <div id="carrossel-wrapper" class="swiper-wrapper content">
                <div id="cor-p4" class="swiper-slide card">
                    <div class="image">
                    <img src="img/corp4-qrcode.jpg" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-aproveite.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-entregarapdia.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-mercaaado.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-descontosprogressivos.webp" alt="">
                    </div> 
                </div> 
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-obacupom.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card">
                    <div class="image">
                    <img src="img/corp4-aproveite2.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-ofertasdodia.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-nossasmarcas.webp" alt="">
                    </div>
                </div>
                <div id="cor-p4" class="swiper-slide card">
                    <div class="image">
                    <img src="img/corp4-lojasoficiais.webp" alt="">
                    </div>
                </div> 
                <div id="cor-p4" class="swiper-slide card"> 
                    <div class="image">
                    <img src="img/corp4-amedigital.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="botao-next2" class="swiper-button-next2"> </div>
        <div id="botao-prev2" class="swiper-button-prev2"> </div>

        <div id="cor-p5"> <!--CORPO PARTE 5-->
            <p id="maisvistos-titulo">produtos mais vistos na americanas</p>
            <div id="item">
                <div id="parte1item">
                    <img src="img/maisvisto-televisao.png" alt="">
                </div>
                <div id="parte2item">
                    <p id="maisvistos-descricao">monitor dell de 18,5'' e 1920h <br> 60hz antirreflexo preto</p> <br>
                    <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br>
                    <label id="preco">R$ 56,00</label> 
                    <p>7x de R$ 105,27 sem juros no cartão de crédito</p>
                </div>
            </div>
            <div id="item">
                <div id="parte1item">
                    <img id="teclado" src="img/maisvisto-teclado.png" alt="">
                </div>
                <div id="parte2item">
                    <p id="maisvistos-descricao">teclado bluetooth logitech <br> k380 cinza</p> <br>
                    <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br>
                    <label id="preco">R$ 86,00</label> 
                    <p>4x de R$ 52,49 sem juros no cartão de crédito</p>
                </div>
            </div>
            <div id="item">
                <div id="parte1item">
                    <img src="img/maisvisto-motorola.png" alt="">
                </div>
                <div id="parte2item">
                    <p id="maisvistos-descricao"> smartphone motorola e22 4g <br> wi-fi tela 6.5" dual</p> <br>
                    <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br>
                    <label id="preco">R$ 1230,00</label> 
                    <p>5x de R$ 178,77 sem juros no cartão de crédito</p>
                </div>
            </div>
            <div id="item">
                <div id="parte1item">
                    <img src="img/maisvisto-boxhp.png" alt="">
                </div>
                <div id="parte2item">
                    <p id="maisvistos-descricao">Box de todos os livros do<br> arry Potter para fãs</p> <br>
                    <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br>
                    <label id="preco">R$ 150,00</label> 
                    <p>2x de R$ 105,27 sem juros no cartão de crédito</p>
                </div>
            </div>
            <div id="item">
                <div id="parte1item">
                    <img src="img/maisvisto-controletv.png" alt="">
                </div>
                <div id="parte2item">
                    <p id="maisvistos-descricao">Controle de tv Philips <br> original novo</p> <br>
                    <img id="estrelas" src="img/estrelas.webp" alt=""> <br> <br>
                    <label id="preco">R$ 26,00</label> 
                    <p>2x de R$ 15,27 sem juros no cartão de crédito</p>
                </div>
            </div>
        </div>

        <div id="cor-p6"> <!--CORPO PARTE 6-->
            <div>
                <img id="correpromo" src="img/correqueésóhoje.webp" alt="">
                <div id="hms"> <!--Só pra decorar-->
                    <h1 id="b1">04</h1> 
                    <h2>h</h2>
                    <h1 id="b2">06</h1>
                    <h2>h</h2>
                    <h1 id="b3">17</h1>
                    <h2>s</h2>
                </div>  
            </div> <br> <br> 
            <div>
                <?php
                    $result = "SELECT * FROM produto_promo LIMIT 8;"; //consultando o banco de dados
                    $result = $pdo->prepare($result);
                    $result->execute();

                    while ($dados = $result->fetch(PDO::FETCH_ASSOC)) { //vai pegar todos os dados do banco e vai listar todos formando assim diversas divs com todos os produtos
                    
                    $imgProduto = "produtos-promocao/" . $dados['nome_produto']; //pegando o diretório da imagem do produto
                ?>
                <div id="produto-promo">
                    <div id="parte1promo">
                        <label> <?php echo $dados['porcentagem']; ?>% de desconto</label>
                    </div>
                    <div id="parte2promo">
                        <img id="imgProduto-promo" src="<?php echo $imgProduto; ?>">
                    </div>
                    <div id="parte3promo">
                        <p id="descProduto-promo"><?php echo $dados['descricao']; ?></p>
                        <img id="estrelaspromo" src="img/estrelas.webp" alt=""> <br> <br>
                        <label id="lblPreco">R$ <?php echo $dados['preco']; ?></label> <br> <br>
                        <p id="compix">com pix</p>
                    </div>
                </div>    
                <?php
                    }
                ?>
            </div>
        </div>

        <div id="cor-p7"> <!--CORPO PARTE 7-->
            <div id="cor-p2-carrossel" class="swiper mySwiper4 container"> <!--CORPO PARTE 4-->
                <div id="carrossel-wrapper" class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img3.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img2.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img3.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img4.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img5.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img6.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img7.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img8.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img9.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img10.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img11.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img12.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img13.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img14.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img15.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img16.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img17.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img18.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img19.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img20.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img21.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img22.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img23.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img24.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img25.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img26.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img27.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="image">
                            <img src="img/corp7-img28.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="botao-next4" class="swiper-button-next4"> </div>
        <div id="botao-prev4" class="swiper-button-prev4"> </div>

        <h1 id="h1ofertasmaispesquisadas">ofertas que você também precisa ver</h1> <!--CORPO PARTE 7-->
        <div id="ofertasmaispesquisadas">  
            <div>
                <h2>iphone 13</h2>
                <h2>iphone 14 pro max</h2>
                <h2>iphone 11</h2>
            </div>
            <div>
                <h2> iphone xr</h2>
                <h2>moto g100</h2>
                <h2>samsung a53</h2>
            </div>
            <div>
                <h2>iphone se</h2>
                <h2>moto g52</h2>
                <h2>notebook</h2>
            </div>
            <div>
                <h2>fogão 4 bocas</h2>
                <h2>samsung a32</h2>
                <h2>apple watch</h2>
            </div>
            <div>
                <h2>escova secadora</h2>
                <h2>copo stanley</h2>
                <h2>ar condicionado portatil</h2>
            </div>
            <div>
                <h2>panela de arroz eletrica</h2>
                <h2>microondas</h2>
                <h2>tablet</h2>
            </div>
        </div>

        <div id="amedigital"> <!--CORPO PARTE 8-->
            <h1>ame digital</h1>
            <h1>guia de segurança</h1>
            <h1>Americanas Empresas</h1>
            <h1>Americanas Advertising</h1>
            <h1>entregas e devoluções</h1>
        </div>
    </section>
    
    <footer id="rodape">
        <div id="rod-p1">
            <img src="img/nome-americanas-red.png" alt="">
            <p>Tudo. A toda hora. Em qualquer lugar.</p>
        </div>
        <div id="rod-p2">
            <p>mais informações</p>
            <img src="img/icone-circun-inverso.png" alt="">
        </div>
        <div id="rod-p3">
            <img src="img/tradutordelibras.png" alt=""> &nbsp;
            <p>tradutor para Libras</p>
        </div>
        <div id="rod-p4">
            <p>acessibilidade digital <br>na Americanas</p>
        </div>
        <div id="rod-p5">
            <img src="img/rodape-icone-youtube.png" alt="">
            <img src="img/rodape-icone-facebook.png" alt="">
            <img src="img/rodape-icone-instagram.png" alt="">
            <img src="img/rodape-icone-twitter.png" alt="">
            <img src="img/rodape-icone-tiktok.png" alt="">
        </div>  
        <div id="rod-p6">
            <p>americanas s.a. / CNPJ: 00.776.574/0006-60 / Inscrição Estadual: 85.687.08-5 / Endereço Rua Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902 / fale com a gente</p> <br> <br>
            <p id="mapadosite">mapa do site</p>
        </div>

        <!--A tag abaixo está aí só pra facilitar de colocar os itens do banco de dados-->
        <a id="aCadProd" href="cadastrar-produto-promo.php" target="_blank">CADASTRAR PRODUTO</a>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> <!--Biblioteca para a paginação-->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script> <!--biblioteca geral do JQUERY-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script> 
</body>
</html>