<?php

$emailSignup = $_POST['emailSignup'];
$nomeSignup = $_POST['firstnameSignup'];

$servername = "mysql.robinapp.com.br";
$username = "robinappdb";
$password = "r0bin4pp";
$db = "robinappdb";

$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO T_ROBINAPP_CADASTRO (NOME, EMAIL) VALUES ('$nomeSignup', '$emailSignup')";

$conn->close();

echo "<script>alert('Mensagem');</script>";

?>
