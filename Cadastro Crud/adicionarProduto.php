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
            <H1><strong>FORMULÁRIO DE CADASTRO:</strong></H1>
        </div>
        
     <form action="recursos/_inserir_produtos.php" method="post" style="margin-top: 20px;">

    <div class="mb-3">
        <label><strong>CÓDIGO DO PRODUTO</strong></label>
        <input type="text" name="codigo_do_produto" class="form-control" placeholder="Insira o código identificador">
    </div>

    <div class="mb-3">
        <label><strong>NOME DO PRODUTO</strong></label>
        <input type="text" name="nome_produto" class="form-control" placeholder="Insira o nome do produto">
    </div>

    <div class="mb-3">
        <label><strong>CATEGORIA</strong></label>
        <select  name="categoria_produto" class="form-select">
            <option value="" selected disabled>Selecione a categoria</option>
            <option value="Periféricos">Periféricos</option>
            <option value="Placas">Placas</option>
            <option value="Baterias">Baterias</option>
        </select>
    </div>

    <div class="mb-3">
        <label><strong>QUANTIDADE</strong></label>
        <input type="number" name="quantidade_produto" class="form-control" placeholder="Insira a quantidade de produtos">
    </div>

    <div class="mb-3">
        <label><strong>FORNECEDOR</strong></label>
        <select name="fornecedor_produto" class="form-select">
            <option value="" selected disabled>Selecione o fornecedor</option>
            <option value="Fornecedor A">Fornecedor A</option>
            <option value="Fornecedor B">Fornecedor B</option>
            <option value="Fornecedor C">Fornecedor C</option>
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>

</form>

    </body>

</html>