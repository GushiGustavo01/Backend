<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis e contantes PHP</title>
</head>
<body>
    <?php 
    //No php as variavéis não de declaram elas se inicializam, além disso para fazer essa inicialização temos de colocar o simbolo de $ para poder inicializar.
    //No exemplo a baixo podemos notar que temos uma variável que recebe o nome GUSTAVO.
     $variaveis = "Gustavo";

     // Também temos no php constantes que ao contrário das variaveis eles podem ser declararas, além disso a constante não recebe o sinal de $, porém temos que faze-la com letras maiúsculas, como já sabemos uma constante não se altera seu valor assim que ela for declarada, ou seja ela é imutável. Veja o exemplo abaixo.

     const COSNTANTE = "Santos";

     //Abaixo teremos 7 regras para que possamos criar inicializar e declarar varievéis e constantes. //  REGRAS PARA NOME DE INDENTIFICADORES.

     //1 Variáveis sempre começam com $.
     //2 O segundo caractere depois do $ pode ser letra ou o simbolo de underline _.
     //3 o PHP e case sensitive para inicialização de variável

     $nomeUsuarioCliente = "Camel-case"; // Forma de escrever variável.
     $nome_usuario_cliente = "Snake-case"; // Forma de escrever variável.
     
    ?>
</body>
</html>