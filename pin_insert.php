<?php
// Debug
error_reporting(E_ALL);
ini_set("display_errors", 1);

foreach ($_POST as $name => $value) {
    $$name = $value;
}

require_once('config/mysql.conf.php');

$conn = new mysqli($servername, $username, $password, $database);

$conn->set_charset("utf8");

$stmt = $conn->prepare("INSERT INTO T_ROBINAPP_PIN (TITULO, DESCRICAO, ALERTA_ID, POS_LAT, POS_LNG) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("ssiss", $titlePin, $descriptionPin, $alertPin, $latPin, $lngPin);

$stmt->execute();

$conn->close();

?>