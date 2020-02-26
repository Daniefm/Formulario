<?php
include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Plugin Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Consultas</title>
  </head>
  <body>
	
    <div>    
    <div class="container theme-showcase" role="main">
            <div class="page-header">
                <legend><h2>Consultas</h2></legend>
				<div align="right">
				<br><h4><a href ="formulario.php">Cadastro de Cliente</a><br></h4>
        <!--Tabela com os valores dos clientes-->
		<table border="0" align="center" height="25%" width="100%">
		    <tr>
			   <td><b>ID cliente</b></td>
			   <td><b>Nome</b></td>
			   <td><b>E-mail</b></td>
			   <td><b>Telefone</b></td>
			   <td><b>Data de nascimento</b></td>
			   <td><b>Alterar cadastro</b></td>
			</tr>
		<!--Buscando valores no banco de dados e inserindo na tabela-->
		<?php
			$exibir = "SELECT * FROM clientes";
			$resultado = mysqli_query($con, $exibir);
			while($row_usuario = mysqli_fetch_assoc($resultado)){
			
			
			?>
			    <tr>
			       <td><?php echo $row_usuario['id_cliente'];?></td>
				   <td><?php echo $row_usuario['nome_cliente'];?></td>			
			       <td><?php echo $row_usuario['email_cliente'];?></td>
				   <td><?php echo $row_usuario['telefone_cliente'];?></td>
			       <td><?php echo date("d/m/Y", strtotime($row_usuario['data_nasc_cliente']));?></td>
				   <td><?php echo "<a href=alterar.php?id_cliente=" . $row_usuario['id_cliente'] . "'>Editar</a><br><hr>"?></td>
				</tr>
			    
	   <?php } ?>
			</table>
			</div>
			</div>
			
   </body>

</html>   



