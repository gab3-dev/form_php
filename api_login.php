<?php

$servername = 'localhost';
$database = "cadastro";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con){
	die("Falha na conexão" . mysqli_connect_error());
}

$user = $_POST['user'];
$password = $_POST['password'];

$select = "select name from user where user='$user' and password='$password'";

$result = mysqli_query($con, $select);

$verify = mysqli_fetch_array($result);

if ($verify){
	echo "Bem vindo, $verify[name]";
}else{
	echo "Invalid";
}

echo "<br><a href='index.html'>Cadastro</a>";

mysqli_close($con);

?>