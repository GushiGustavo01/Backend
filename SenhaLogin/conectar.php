<?php
 $local = "localhost";
 $usuario = 'root';
 $senha = "";
 $banco = "telalogin";



 $chave = mysqli_connect($local,$usuario,$senha,$banco);

 if( $chave->erro){
    die("Falha ao conectar!!" . $chave->error) ;
 }
?>