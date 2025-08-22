<?php
include 'config/conexao.php';
if(!empty($_GET['id'])){ // VAi na minha url e pega o id se não for vazia executa botão de edição



$id = $_GET['id']; // Pegando o id da url

$sql = "SELECT * FROM produtos WHERE id=$id"; // Selecionando a tabela pelo Ids

//$resultado = $conexao->query($sql); 
// Chave e comando para banco
$resultado = mysqli_query($conexao, $sql); 

if($resultado -> num_rows > 0){


     while($user_data = mysqli_fetch_assoc($resultado)){

    $codigo_produto = $user_data['codigo_do_produto'];
    $nome_produto = $user_data['nome_produto'];
    $categoria_produto = $user_data['categoria_produto'];
    $quantidade_produto = $user_data['quantidade_produto'];
    $fornecedor_produto = $user_data['fornecedor_produto'];

    }
}
        
       else{
                header('Location:index.php');
        }
}
       
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

        <div align="center">
            <H1><strong>EDITAR CADASTRO</strong></H1>
        </div>
        
     <form action="salvaredit.php" method="post" style="margin-top: 20px;">

    <div class="mb-3">
        <label><strong>CÓDIGO DO PRODUTO</strong></label>
        <input type="text" name="codigo_do_produto" class="form-control" placeholder="Insira o código identificador" value="<?php echo $codigo_produto  ?>">
    </div>

    <div class="mb-3">
        <label><strong>NOME DO PRODUTO</strong></label>
        <input type="text" name="nome_produto" class="form-control" placeholder="Insira o nome do produto" value="<?php echo $nome_produto  ?>">
    </div>

    <div class="mb-3">
        <label><strong>CATEGORIA</strong></label>
        <select  name="categoria_produto" class="form-select">
            <option value="" selected disabled>Selecione a categoria</option>
            <option value="Periféricos"  <? echo ($categoria_produto == 'Periféricos') ? 'selected' : ''?>>Periférico</option>
            <option value="Placas"    <? echo ($categoria_produto== 'Placas') ? 'selected' : ''?>>Placas</option>
            <option value="Baterias"  <? echo ($categoria_produto == 'Baterias') ? 'selected' : ''?>>Baterias</option>
        </select>
    </div>

    <div class="mb-3">
        <label><strong>QUANTIDADE</strong></label>
        <input type="number" name="quantidade_produto" class="form-control" placeholder="Insira a quantidade de produtos" value="<?php echo $quantidade_produto ?>">
    </div>

    <div class="mb-3">
        
        <label><strong>FORNECEDOR</strong></label>
        
        <select name="fornecedor_produto" class="form-select">
            <option>Selecione o fornecedor</option>
            <option  value="Fornecedor A" <? echo ($fornecedor_produto == 'Fornecedor A') ? 'selected' : '' // Ternário estrutura de condição simples?>>Fornecedor A</option> 
            <option  value="Fornecedor B" <? echo ($fornecedor_produto == 'Fornecedor B') ? 'selected' : ''?>>Fornecedor B</option>
            <option  value="Fornecedor C" <? echo ($fornecedor_produto == 'Fornecedor C') ? 'selected' : ''?>>Fornecedor C</option>
        </select>
    </div>

    <div>
        <input type="hidden" name="id" value="<?php echo $id; // Passando O id para a página salvaredit?>"> 
        <button type="submit" name="update" id="update" class="btn btn-success">Editar</button>
        <a href="listar_produtos.php" class="btn btn-primary">Voltar</a>
    </div>

</form>


    </body>

</html>