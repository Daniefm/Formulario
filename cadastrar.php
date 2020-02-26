<?php

session_start();
include_once("conexao.php");


//Recuperando os valores para inserir na tabela clientes
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$senha = $_POST['senha'];
$nasc = $_POST['nasc'];



//Inserindo na tabela clientes
$query = "INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente) VALUES ('$nome','$email','$tel','$senha','$nasc')";
$q = mysqli_query($con, $query);

 if(mysqli_insert_id($con)){
	 $_SESSION['msg'] = "<p style =' color:green;'>Usuário cadastrado com sucesso.</p>";
	 header("location: formulario.php");
 }else{
	 $_SESSION['msg'] = "<p style =' color:red;'>Usuário não foi cadastrado com sucesso.</p>";
	 header("location: formulario.php");
 }



