<?php
    class Adm {

        public function cadastrarProduto($nome_produto, $descricao, $preco_final, $preco_antigo, $porcentagem) {
            global $pdo; //variável global da conexão.php

            //inserindo no banco de dados
            $sql = "INSERT INTO produto_promo (nome_produto, descricao, preco, preco_antigo, porcentagem) VALUES (:nome_produto, :descricao, :preco, :preco_antigo, :porcentagem);";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome_produto", $nome_produto);
            $sql->bindValue("descricao", $descricao); 
            $sql->bindValue("preco", $preco_final);
            $sql->bindValue("preco_antigo", $preco_antigo);
            $sql->bindValue("porcentagem", $porcentagem);
            
            if($sql->execute()) //se executar
            {
                echo header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            }     
        }

        public function cadastrarProdutos($nome_produto, $descricao, $preco_final, $preco_antigo, $porcentagem, $parcelas, $tipo) {
            global $pdo;

            $sql = "INSERT INTO produto_mais_visto (nome_produto, descricao, preco, preco_antigo, porcentagem, parcelas, tipo) VALUES (:nome_produto, :descricao, :preco, :preco_antigo, :porcentagem, :parcelas, :tipo);";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome_produto", $nome_produto);
            $sql->bindValue("descricao", $descricao); 
            $sql->bindValue("preco", $preco_final);
            $sql->bindValue("preco_antigo", $preco_antigo);
            $sql->bindValue("porcentagem", $porcentagem);
            $sql->bindValue("parcelas", $parcelas);
            $sql->bindValue("tipo", $tipo);


            if($sql->execute()) //se executar
            {
                echo header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            }    
        }

    }



?>