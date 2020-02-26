<?php

session_start();
include_once("conexao.php");

//Recuperando os valores para inserir na tabela clientes
$id = $_POST['id_cliente'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$senha = $_POST['senha'];
$nasc = $_POST['nasc'];



//Inserindo na tabela clientes
$query = "UPDATE clientes SET nome_cliente = '$nome', email_cliente = '$email', telefone_cliente = '$tel', senha_cliente ='$senha', data_nasc_cliente = '$nasc' WHERE id_cliente = '$id'";
$q = mysqli_query($con, $query);

 if(mysqli_affected_rows($con)){
	 $_SESSION['msg'] = "<p style =' color:green;'>Usuário editado com sucesso.</p>";
	 header("location: alterar.php");
 }else{
	 $_SESSION['msg'] = "<p style =' color:red;'>Usuário não foi editado com sucesso.</p>";
	 header("location: alterar.php");
 }
