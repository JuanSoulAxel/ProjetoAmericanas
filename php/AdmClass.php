<?php
    class Adm {

        public function cadastrarProduto($nome_produto, $descricao, $preco, $porcentagem) {
            global $pdo; //variável global da conexão.php

            //inserindo no banco de dados
            $sql = "INSERT INTO produto_promo (nome_produto, descricao, preco, porcentagem) VALUES (:nome_produto, :descricao, :preco, :porcentagem);";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome_produto", $nome_produto);
            $sql->bindValue("descricao", $descricao);
            $sql->bindValue("preco", $preco);
            $sql->bindValue("porcentagem", $porcentagem);
            
            if($sql->execute()) //se executar
            {
                "<script language='javascript' type='text/javascript'>
                    alert('PRODUTO CADASTRADO!'); 
                </script>";
                header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            }
            else //se não executar
            {
                echo
                "<script language='javascript' type='text/javascript'>
                    alert('Infelizmente algo deu errado... <br>Tente novamente mais tarde!'); 
                </script>";
                header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            }        
        }

    }



?>