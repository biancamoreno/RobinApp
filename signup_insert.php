<?php
// Debug
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

foreach ($_POST as $name => $value) {
    echo $name . '<br />';
    $$name = $value;
}

$dateSignup = implode("-",array_reverse(explode("/",$dateSignup)));

$uploadfile = 'upload/' . time() . '_' . basename($_FILES['imgSignup']['name']);
move_uploaded_file($_FILES['imgSignup']['tmp_name'], $uploadfile);
$fotoSignup = $uploadfile;

require_once('config/mysql.conf.php');

$conn = new mysqli($servername, $username, $password, $database);

$conn->set_charset("utf8");

$stmt = $conn->prepare("
    INSERT INTO T_ROBINAPP_CADASTRO (NOME, SOBRENOME, DT_NASCIMENTO, PAIS, ESTADO, CIDADE, CEP, BAIRRO, LOGRADOURO, NUMERO, RAIO, EMAIL, SENHA, FOTO)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param("sssssssssiisss", 
    $firstnameSignup,
    $lastnameSignup,
    $dateSignup,
    $countrySignup,
    $stateSignup,
    $citySignup,
    $cepSignup,
    $neighborhoodSignup,
    $addressSignup,
    $numberSignup,
    $radiusSignup,
    $emailSignup,
    $passwordSignup,
    $fotoSignup
);

$stmt->execute();

$conn->close();

?>