<?php 
    session_start();
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
    <title>Cadastrar cliente</title>
  </head>
    <body>
    <div>    
    <div class="container theme-showcase" role="main">
            <div class="page-header">
                <legend><h2>Cadastro de cliente</h2></legend>
            <div align="right">
			<a href="consultas.php"><h4>Cadastros salvos</h4></a>
			</div>
                
				<?php
                   if(isset($_SESSION['msg']));
				   echo $_SESSION['msg'];
				   unset($_SESSION['msg']);
                 ?>
				
            </div>	
            
            <!-- Campos do formulário com suas propriedades -->
            <div style="padding-top:20px;">
                <form class="form-horizontal" action="cadastrar.php" method="POST">
                    <div class="form-group">
		                <label class="col-sm-2 control-label">Nome:</label>
                        <div class="col-sm-10">
                            <input id="nome" name="nome" type="text" class="form-control" placeholder="Digite seu nome" input value="" required><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input id="email" name="email" type="email" class="form-control" placeholder="Digite seu email" input value="" required><br><br>           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Telefone:</label>
                        <div class="col-sm-10">
                            <input id="telefone" name="telefone" type="text" maxlength="13" class="form-control phone-ddd-mask" placeholder="Ex.:(00) 0000-0000" required><br><br>           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha:</label>
                        <div class="col-sm-10">
                            <input id="senha" name="senha" type="password" class="form-control" placeholder="Digite sua senha" required><br><br>          
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Data de nascimento:</label>
                        <div class="col-sm-10">
                            <input id="nasc" name="nasc" type="date" class="form-control date-time-mask" placeholder="Ex.: 00/00/0000" required><br><br>           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Cadastrar">
                            
                            
                        </div>
                    </div>
                </form>
            </div>
	                    

        </div>
    
    </body>

   

</html>
