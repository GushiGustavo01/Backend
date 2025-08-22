<?php
$servername = "localhost"; // padrão localhost ou servidor local 1
$database   = "cadastrofacil"; // nome do banco de dados 4
$username   = "root"; // padrão root do MySQL 2
$password   = "root"; // senha do MySQL (se não tiver, deixe "") 3
$port       = "3306"; // porta do MySQL 5

 //Criar conexão
$conexao = mysqli_connect($servername, $username, $password, $database, $port);

//if($conexao-> connect_errno){
   // echo "Falha ao conectar";
//}
//else
   // echo " Conectado ao banco de dados";
     


?>