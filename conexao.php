<?php

$hostname="localhost";
$user = "root";
$password= "";
$database ="cadastro";

$conexao = mysqli_connect($hostname,$user,$password,$database);



if(! $conexao) {
    print "Erro 31 ";
} 

//Erro 31 indica erro na conexao com banco de dados

?>