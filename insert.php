<?php

$email = $_POST['emailNew'];
$servername = "mysql.robinapp.com.br";
$username = "robinappdb";
$password = "r0bin4pp";
$db = "robinappdb";

$conn = new mysqli($servername, $username, $password, $db);
if($conn -> connect_error) {
    echo "Falha de conexão";
}
$sql = "INSERT INTO T_ROBINAPP_MAILING (EMAIL) VALUES ('$email')";

echo "$email";
if ($conn->query($sql) == TRUE){
    echo "Cadastro efetuado com sucesso";
}else{
    echo "Erro de Cadastro";
}
$conn->close();
?>
