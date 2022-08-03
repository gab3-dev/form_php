<?php

$servername = 'localhost';
$database = "cadastro";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con){
	die("Falha na conexão" . mysqli_connect_error());
}

$id = "";
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$gender = $_POST['gender'];
$user = $_POST['user'];
$password = $_POST['password'];

$insert = "insert into user (name, lastname, email, cpf, gender, user, password) values ('$name', '$lastname', '$email', '$cpf', '$gender', '$user', '$password')";

if (mysqli_query($con, $insert)){
	echo "Informações salvas com sucesso!";
}else{
	echo "Erro" . $insert . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>