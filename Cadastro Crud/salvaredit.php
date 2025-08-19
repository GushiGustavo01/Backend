<?php

 include 'config/conexao.php';


if(isset($_POST['update'])){
$id = $_POST['id'];
$codigo_produto = $_POST['codigo_do_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria_produto = $_POST['categoria_produto'];
$quantidade_produto = $_POST['quantidade_produto'];
$fornecedor_produto = $_POST['fornecedor_produto'];
 



    $sqlupdate = "UPDATE produtos SET codigo_do_produto ='$codigo_produto', nome_produto ='$nome_produto', categoria_produto ='$categoria_produto', quantidade_produto ='$quantidade_produto',fornecedor_produto =' $fornecedor_produto' WHERE id ='$id'";

    $resultado = mysqli_query($conexao, $sqlupdate);
    }
    header('Location: listar_produtos.php');

?>
