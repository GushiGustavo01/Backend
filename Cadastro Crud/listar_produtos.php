<?php

include 'config/conexao.php'; // Estou com a chave do Banco de dados!! 1

//Se estiver dados na consulta execute o if verdadeiro
if(!empty($_GET['search'])) 
{ // Bloco true
  //Guarde o dados da consulta na variável
  $dados = $_GET['search'];
  //Estou com o comando/pedido que quero mandar para o banco de dados!! 2
  $sql =  "SELECT * FROM produtos WHERE id LIKE '%$dados%' or codigo_do_produto LIKE '%$dados%' or nome_produto LIKE '%$dados%'or quantidade_produto LIKE '%$dados%'or fornecedor_produto LIKE '%$dados%' ORDER BY id DESC";

}else
{ // Bloco false
  
  $sql = "SELECT * FROM produtos ORDER BY id DESC"; 
}

//Estou com a chave + comando/pedido entrei no banco de dados  e estou com o objeto fechado
//  e esta guardado na minha bolsa não posso abrir!! 3
$resultado = mysqli_query($conexao, $sql); 


//print_r($resultado);
//print_r($dadosbanco);


?>
<!DOCTYPE >
<html lang="pt-br" >
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
        
        <style type="text/css">

            #tamanhoContainer{
                width: 500px;
            }

        </style>

    </head>
   <body style="background-color: rgb(181, 217, 255);">
    
    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Produtos</h3>
          <br/>
        <div style=" display:flex; justify-content:center; gap:1px">
          <input type="search" placeholder="Pesquisar" name="pesquisar" id="pesquisar" style=" width:300px;height:30px; outline:none;">
          <a  onclick ="pesquisarData()" class='btn btn-primary btn-sm' href='#' role='button'><i class='fa-solid fa-magnifying-glass'></i>&nbsp;</a>
      </div>

        <br/>
        <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        <br>
    
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">CÓD</th>
                <th scope="col">NOME DO PRODUTO</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">FORNECEDOR</th>
                <th scope="col"style="text-align:center;">AÇÕES</th>
              </tr>
            </thead>
            <tbody>
              <?php

              // Estrutura para percorrer um array associativo aplicando em uma variavel.
              // Estou com o objeto passei ele para o Sr Assoc ele abriu e me mostrou tudo que tinha dentro 4!!
              while($user_data = mysqli_fetch_assoc($resultado))
              {
                echo "<tr>";
                echo "<td>".$user_data['codigo_do_produto']."</td>"; // Aqui estou mostrando o que tinha dentro para Vc que esta lendo!!
                echo "<td>".$user_data['nome_produto']."</td>";
                echo "<td>".$user_data['categoria_produto']."</td>";
                echo "<td>".$user_data['quantidade_produto']."</td>";
                echo "<td>".$user_data['fornecedor_produto']."</td>";

                echo "<td style='text-align:center;'>
                         
                        <a class='btn btn-warning btn-sm' href='editar.php?id=$user_data[id]' role='button'><i class='fa-regular fa-pen-to-square'></i>&nbsp;Editar</a> 
                        <a class='btn btn-outline-danger btn-sm' href='delete.php?id=$user_data[id]' role='button'><i class='fa-regular fa-trash-can'></i>&nbsp;Excluir</a>
                      </td>";
                echo "</tr>";
               
              }
              
              ?>
             
    
             
            </tbody>
          </table>

    </div>
  </body>
  <script>
    // Pega o elemento que foi digitado no input pelo ID que esta nesta pagina em (<input id="Pesquisar") e adiciona em uma Variavel PesquisarH
    let pesquisarH = document.getElementById('pesquisar');
    
    // Pegando minha variavel pesquiserH e analisando pela função de evento de keydow()
      pesquisarH.addEventListener("keydown", function(event) { 
        if(event.key === "Enter")
          {
             pesquisarData();
          }
      }); 


      function pesquisarData()// Função quando o botão de pesquisa for acionado chama um eventolister de onclick
      {
        window.location = 'listar_produtos.php?search='+pesquisarH.value; // Localiza na barra de link e adiciona na mesma o valor da pesquisa para o PHP pegar essa pesquisa.
      }

      
     </script>
    
</html>


