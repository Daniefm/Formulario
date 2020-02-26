<!--Recuperando variavel da janela "consultas.php"-->
<?php
session_start();
include_once("conexao.php");

$id_cliente =  filter_input(INPUT_GET, "id_cliente", FILTER_SANITIZE_NUMBER_INT);

$exibir = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente'";
$resultado = mysqli_query($con, $exibir);
$row_usuario = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Alterar cadastro</title>
  </head>
   <body>
     <div class="container theme-showcase" role="main">
        <div class="page-header">
           <legend><h2>Alteração de cadastro</h2></legend>
		    <div align="right">
			<a href="consultas.php"><h4>Cadastros salvos</h4></a>
			<h4><a href ="formulario.php">Cadastro de Cliente</h4></a><br>
			</div>
				<div>
					<?php
						   if(isset($_SESSION['msg']));
							  echo $_SESSION['msg'];
							  unset($_SESSION['msg']);
					?>
				</div>
		</div>
        <!--Inicio do formulario de alteração-->
        <div style="padding-top:20px">
        <form name="form" class="form-horizontal" action="editar.php" method="POST">
			<input type="hidden" name="id_cliente" value="<?php echo $row_usuario['id_cliente']; ?>">
			  <div class="form-group">
				  <label class="col-sm-2 control-label">Nome:</label>
				  <div class="col-sm-10">
					 <input id="nome1" name="nome" type="text" class="form-control" value="<?php echo $row_usuario['nome_cliente'];  ?>" required><br><br>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">E-mail:</label>
				  <div class="col-sm-10">
					 <input id="email" name="email" type="email" class="form-control" input value="<?php echo $row_usuario['email_cliente'];  ?>" required><br><br>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Telefone:</label>
				  <div class="col-sm-10">
					<input id="telefone" name="telefone" type="text" maxlength="13" class="form-control phone-ddd-mask" input value="<?php echo $row_usuario['telefone_cliente'];  ?>" required><br><br>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Senha:</label>
				  <div class="col-sm-10">
					<input id="senha" name="senha" type="password" class="form-control" input value="<?php echo $row_usuario['senha_cliente'];  ?>" required><br><br>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Data de nascimento:</label>
				  <div class="col-sm-10">
					<input id="nasc" name="nasc" type="date" class="form-control date-time-mask" input value="<?php echo $row_usuario['data_nasc_cliente'];  ?>" required><br><br>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-sucess" value="Salvar alteração">
				  
				  </div>
				</div>
        </form>
        </div>
      </div>
              

  
   </body>




</html>
