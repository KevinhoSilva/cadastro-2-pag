<?php 
session_start();
include_once("conexao.php");

// onde recebemos os dados do formulario 
$cpf =  $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];


//onde enviamos os dados para bando de dados

$resultado = mysqli_query($conn, "INSERT INTO clientes(CPF,NOME,EMAIL,SENHA,CEP,ESTADO,CIDADE,RUA,NUMERO) VALUES('$cpf','$nome','$email','$senha','$cep','$estado','$cidade','$rua','$numero')");