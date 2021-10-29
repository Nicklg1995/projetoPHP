<?php 

session_start();
include_once("conexao.php");

$id = $_POST ['id'];
$nome = $_POST['nome'];
$number = $_POST['number'];
$cpf = $_POST['cpf'];


$result_usuario = " UPDATE from usuarios SET nome='$nome', number='$number', cpf='$cpf', WHERE id ='$id'";



$resultado_usuario = mysqli_query($conexao, $result_usuario);

?>
<html>


<script>



alert ("FOI REALIZADO COM SUCESSO.");
window.location ="api.php"; 


</script>



</html>