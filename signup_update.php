<?php
// Debug
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

foreach ($_POST as $name => $value) {
    $$name = $value;
}

$dateUpdate = implode("-",array_reverse(explode("/",$dateUpdate)));

if(empty($_FILES['imgUpdate']['name']) || is_null($_FILES['imgUpdate']['name']))
{
    $fotoUpdate = $imgOldUpdate;
} else {
    $uploadfile = 'upload/' . time() . '_' . basename($_FILES['imgUpdate']['name']);
    move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $uploadfile);
    $fotoUpdate = $uploadfile;
}

require_once('config/mysql.conf.php');

$conn = new mysqli($servername, $username, $password, $database);

$conn->set_charset("utf8");

$stmt = $conn->prepare("
    UPDATE T_ROBINAPP_CADASTRO
    SET NOME = ?, SOBRENOME = ?, DT_NASCIMENTO = ?, PAIS = ?, ESTADO = ?, CIDADE = ?, CEP = ?, BAIRRO = ?, LOGRADOURO = ?, NUMERO = ?, RAIO = ?, EMAIL = ?, SENHA = ?, FOTO = ?
    WHERE ID = ?
");

$stmt->bind_param("sssssssssiisssi", 
    $firstnameUpdate,
    $lastnameUpdate,
    $dateUpdate,
    $countryUpdate,
    $stateUpdate,
    $cityUpdate,
    $cepUpdate,
    $neighborhoodUpdate,
    $addressUpdate,
    $numberUpdate,
    $radiusUpdate,
    $emailUpdate,
    $passwordUpdate,
    $fotoUpdate,
    $idUpdate
);

$stmt->execute();

$conn->close();

?>