<?php

include '../config/conexao.php';

$codigo_produto = $_POST['codigo_do_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria_produto = $_POST['categoria_produto'];
$quantidade_produto = $_POST['quantidade_produto'];
$fornecedor_produto = $_POST['fornecedor_produto'];

$sql = "INSERT INTO produtos(codigo_do_produto, nome_produto, categoria_produto, quantidade_produto, fornecedor_produto) 
VALUES ('$codigo_produto', '$nome_produto', '$categoria_produto', $quantidade_produto, '$fornecedor_produto')";




$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fácil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
     <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>

<body style="background-color: rgb(181, 217, 255);">

    <div class="container" style="margin-top: 100px;">
        <form action="..recursos/_inserir_produtos.php" method="post" style="margin-top: 20px;">
            <div class="alert alert-success" role="alert">
                Produto cadastrado com sucesso!
            </div>
            <div>
                <a href="../index.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>