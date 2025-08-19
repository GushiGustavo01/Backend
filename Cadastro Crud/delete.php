<?php

include 'config/conexao.php';

if(!empty($_GET['id'])){



$id = $_GET['id']; // Pegando o id da url

$sql = "SELECT * FROM produtos WHERE id=$id"; // Selecionando a tabela pelo Ids para saber se existe

$resultado = $conexao->query($sql); // Chave e comando para banco


if($resultado -> num_rows > 0){


     $sqldelete = "DELETE FROM produtos WHERE id='$id'";
     $resultdelete = mysqli_query($conexao, $sqldelete);

     header('Location:listar_produtos.php');

}
        
       else{
                header('Location:index.php');
        }
}

?>