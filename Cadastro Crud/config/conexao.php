<?php
$servername = "localhost"; // padrão localhost ou servidor local
$database   = "cadastrofacil"; // nome do banco de dados
$username   = "root"; // padrão root do MySQL
$password   = "root"; // senha do MySQL (se não tiver, deixe "")
$port       = "3306"; // porta do MySQL

 //Criar conexão
$conexao = mysqli_connect($servername, $username, $password, $database, $port);

//if($conexao-> connect_errno){
   // echo "Falha ao conectar";
//}
//else
   // echo " Conectado ao banco de dados";
     


?>