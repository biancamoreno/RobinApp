<?php

$email = $_POST['emailNew'];
$nome = $_POST['nameNew'];
$servername = "mysql.robinapp.com.br";
$username = "robinappdb";
$password = "r0bin4pp";
$db = "robinappdb";

$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO T_ROBINAPP_MAILING (EMAIL,NOME) VALUES ('$email','$nome')";

$conn->close();

$emailSignup = $_POST['emailSignup'];
$nomeSignup = $_POST['firstnameSignup'];
$sobrenomeSignup = $_POST['lastnameSignup'];
$dt_nascSignup = $_POST['dateSignup'];
$paisSignup = $_POST['countrySignup'];
$estadoSignup = $_POST['stateSignup'];
$cidadeSignup = $_POST['citySignup'];
$cepSignup = $_POST['cepSignup'];
$bairroSignup = $_POST['neighborhoodSignup'];
$logradouroSignup = $_POST['addressSignup'];
$numeroSignup = $_POST['numberSignup'];
$raioSignup = $_POST['radiusSignup'];
$senhaSignup = $_POST['passwordSignup'];
$imgSignup = $_POST['imgSignup'];


$conn2 = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO T_ROBINAPP_CADASTRO (NOME, SOBRENOME, DT_NASCIMENTO, PAIS, ESTADO, CIDADE, CEP, BAIRRO, LOGRADOURO, NUMERO, EMAIL, SENHA, RAIO, FOTO) VALUES ('$nomeSignup', '$sobrenomeSignup', '$dt_nascSignup', '$paisSignup', '$estadoSignup', '$cidadeSignup', '$cepSignup', '$bairroSignup', '$logradouroSignup', '$numeroSignup', '$emailSignup', '$senhaSignup', '$raioSignup', '$fotoSignup')";

$conn2->close();

?>
