<?php
    session_start();
    include_once("conexao.php");




    $id = filter_input(INPUT_GET, 'id',     FILTER_SANITIZE_NUMBER_INT);
    $result_usuario ="SELECT * FROM usuarios WhERE id = '$id'";
    $resultado_usuario = mysqli_query($conexao,$result_usuario); 
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>API</title>
	<link rel="stylesheet" href="_css/cadastros.css">
</head>


<body>

 <form method="post" action="procedit.php">
  <input type="hidden" nome="id" value=" <?php  echo  $row_usuario ['id'];     ?>  " >

   <div class="container">
        <table class="rTable">


<caption><h1>Editar Registro</h1></caption>

            <thead>
                <tr>
                    <th> Id</th>
                    <th>Editar Nome</th>
                    <th>Editar Telefone</th>
                    <th>Editar CPF</th>
                    <th>Opção</th>
                </tr>
            </thead>


            <tbody>


              <tr>
                    <th>  <?php echo $row_usuario ['id']; ?>  </th>
                    <td><input type="text" name="nome" class="campo" value="<?php echo $row_usuario ['nome']; ?>" maxlength="30" required autofocus ><br>      </td>
                    <td><input type="number" name="number" class="campo"  value="<?php echo $row_usuario ['number']; ?>" maxlength="20">   </td>
                    <td><input type="number" name="cpf" class="campo" value="<?php echo $row_usuario ['cpf']; ?>" maxlength="20" placeholder="Digite apenas os números">   </td>
                    <td>
               
                    <input type="submit" value="Editar" class="btn">  
     
                    <input type="button" value="Voltar" onclick="location.href='/index.php'" class="btn"> 
     
  </form>

   

                    </td>
                 </tr>

             </tbody>    
             </table>
             </div>

</body>
</html>	

