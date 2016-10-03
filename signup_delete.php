<?php
// Debug
//error_reporting(E_ALL);
//ini_set("display_errors", 1);


if(empty($_GET['id']) || is_null($_GET['id']))
{
    echo 'parametro inválido';
} else {
    $id = $_GET['id'];

    require_once('config/mysql.conf.php');

    $conn = new mysqli($servername, $username, $password, $database);

    $conn->set_charset("utf8");

    $stmt = $conn->prepare("
        DELETE FROM T_ROBINAPP_CADASTRO
        WHERE ID = ?
    ");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $conn->close();
}

header("location: admin.php");

?>