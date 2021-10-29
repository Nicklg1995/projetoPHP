<?php

include 'conexao.php';

$buscar_cadastros ="SELECT * FROM usuarios";
$query_cadastros = mysqli_query($conexao,$buscar_cadastros); 




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>API</title>
	<link rel="stylesheet" href="_css/cadastros.css">



    <style type="text/css">
<!--
	table {
  width:760px;
  _width:760px;
	}
	#celula1 {
  width: 100px;
  padding:10px;
  _width: 255px;
	}
	#celula2 {
  width: 200px;
  padding:10px;
  _width: 495px;
	}
</style>





</head>
<body>

<caption><h1>Listar Registros</h1></caption>

<?php

while($sql = mysqli_fetch_array($query_cadastros)){
    $id = $sql['id'];
    $nome = $sql['nome'];
    $telefone = $sql['number'];
    $cpf = $sql['cpf'];

?>


<div class="container">
    <table class="rTable">



        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Opção</th>
            </tr>
        </thead>


        <tbody>


        <form method="post" action="excluir.php" >


            <tr>
                <th> <?php  echo $id       ?>    </td>
                <td> <?php  echo $nome     ?></td>
                <td> <?php  echo $telefone ?></td>
                <td> <?php  echo $cpf      ?></td>
                <td>

                    <input type="hidden" nome="id" value=" <?php  echo $id   ?>  " >
                  
                    

                    </form>

                    <a  href="editar.php?id=<?php  echo $id  ?> "> Editar </a>
        
                     <a onclick="return confirm('DESEJA MESMO EXCLUIR ?')"href="excluir.php?id=<?php  echo $id  ?> ">- Excluir </a>
        


                </td>
            </tr>


        </tbody>
    </table>
</div>

<?php   }; ?> <!--  F E C H A R  WHILE  -->
</body>
</body>
</html>