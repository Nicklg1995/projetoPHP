<?php 

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id',  FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "DELETE FROM usuarios WHERE id ='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

?>

<html>


    <script>



        alert ("SEU CADASTRO FOI EXCLUIDO.");
        window.location ="api.php"; 


    </script>



</html> 