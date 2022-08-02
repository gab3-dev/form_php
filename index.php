<?php

$con = mysqli_connect('localhost', 'root', '', 'cadastro');

mysqli_select_db('cadastro', $con);

if (!$con){
	die("Falha na conexão" . mysqli_connect_error());
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$gender = $_POST['gender'];
$user = $_POST['user'];
$password = $_POST['password'];

$insert = 'insert into usuario (id, name, lastname, email, cpf, gender, user, password) values (:name, :lastname, :email, :cpf, :gender, :user, :password)';

if (mysqli_query($con, $insert)){
	echo "Informações salvas com sucesso!";
}
echo "Erro" . $insert . "<br>" . mysqli_error($con);

mysqli_close($con);


?>