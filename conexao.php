<?php
  //Dados de conexão
  $servidor = "localhost:3308";
  $usuario = "root";
  $senha = "1234";
  $dbname = "db_formulario";
   
   //criando conexão
$con = mysqli_connect($servidor, $usuario, $senha, $dbname) ;
    
    if (!$con) 
    {
        die("Erro na conexão: " .mysqli_connect_error());
    }

    echo "Conexão realizada.";

?>
