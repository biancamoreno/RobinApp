<?php

$email = $_POST['emailNew'];
$nome = $_POST['nameNew'];
$servername = "mysql.robinapp.com.br";
$username = "robinappdb";
$password = "r0bin4pp";
$db = "robinappdb";

$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO T_ROBINAPP_MAILING (EMAIL,NOME) VALUES ('$email','$nome')";
mysql_query($sql);


$conn->close();
?>
