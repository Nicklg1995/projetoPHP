<?php

include_once ("conexao.php");

$nome = $_POST['nome'];
$number = $_POST['number'];
$cpf = $_POST['cpf'];

$sql ="insert into usuarios (nome,number,cpf) values ('$nome', '$number', '$cpf')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>


<html>


<script>



alert ("PARABÉNS! SEU CADASTRO FOI REALIZADO COM SUCESSO.");
window.location ="index.php"; 


</script>



</html>