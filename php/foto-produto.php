<?php
require 'conexao.php';
require_once 'AdmClass.php';

if(isset($_FILES['produto'])) //verificar se usuário enviou produto
{
    $adm = new Adm(); //instanciando classe ADM

    $descricao = $_POST['descricao']; 
    $preco = $_POST['preco'];
    $porcentagem = $_POST['porcentagem'];

    //strtolower = deixa tudo minúsculo
    //esse menos quatro é pra pegar os últimos quatro dígitos do nome do arquivo ex: "arquivo.jpg". Aí pegaria somente o ".jpg"
    $extensao = strtolower(substr($_FILES['produto']['name'], -4 )); 
    
    //o md5 vai criptografar o nome
    //o time vai retornar a hora atual
    //e por último a extensão
    $novo_nome = md5(time()) . $extensao; //isso evita que tenha nome de arquivos duplicados no servidor para que nenhum sobescreva o outro.

     //primeiro diretorio
     $diretorio = '../produtos-promocao/';

     //usando para criar a pasta
     mkdir($diretorio, 0755);
   
    //quando o php recebe um arquivo esse arquivo é automaticamente enviado para uma pasta temporária
    //para acessar a pasta se usa a função abaixo
    //na primeira parte a gente pega o nosso arquivo
    //acessar o atributo especial tmp_name que é do próprio php
    //e depois vai enviar para nosso diretorio criado acima e dar o novo nome a ele também criado a cima
    //ou seja, na primeira parte  a gente acessa o diretório e na segunda parte a gente copia para o nosso diretório
    move_uploaded_file($_FILES['produto']['tmp_name'], $diretorio.$novo_nome);

    $adm->cadastrarProduto($novo_nome, $descricao, $preco, $porcentagem); 
}
else
{ 
    header("Location: ../index.html");
}
?>