<meta charset="utf-8">

<?php
// Debug
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

require_once('config/mysql.conf.php');

$conn = new mysqli($servername, $username, $password, $database);

$conn->set_charset("utf8");

$stmt = $conn->prepare("SELECT * FROM T_ROBINAPP_CADASTRO");

$stmt->execute();

$stmt->bind_result($id, $nome, $sobrenome, $dt_nascimento, $pais, $estado, $cidade, $cep, $bairro, $logradouro, $numero, $raio, $email, $senha, $foto);

$output = '';
$output .= '<table border="1">';
$output .= '<tr>';
$output .= '<th>Foto</th>';
$output .= '<th>Id</th>';
$output .= '<th>Nome</th>';
$output .= '<th>Sobrenome</th>';
$output .= '<th>Data Nasc.</th>';
$output .= '<th>Pais</th>';
$output .= '<th>Estado</th>';
$output .= '<th>Cidade</th>';
$output .= '<th>Cep</th>';
$output .= '<th>Bairro</th>';
$output .= '<th>Logradouro</th>';
$output .= '<th>Numero</th>';
$output .= '<th>Raio</th>';
$output .= '<th>Email</th>';
$output .= '<th>Ação</th>';
$output .= '<tr>';

while ($stmt->fetch()) {
    $output .= '<tr>';
    $output .= '<td>' . '<img width="35px" height="35px" src="' . $foto . '"></td>';
    $output .= '<td>' . $id . '</td>';
    $output .= '<td>' . $nome . '</td>';
    $output .= '<td>' . $sobrenome . '</td>';
    $dt_nascimento = implode("/",array_reverse(explode("-",$dt_nascimento)));
    $output .= '<td>' . $dt_nascimento . '</td>';
    $output .= '<td>' . $pais . '</td>';
    $output .= '<td>' . $estado . '</td>';
    $output .= '<td>' . $cidade . '</td>';
    $output .= '<td>' . $cep . '</td>';
    $output .= '<td>' . $bairro . '</td>';
    $output .= '<td>' . $logradouro . '</td>';
    $output .= '<td>' . $numero . '</td>';
    $output .= '<td>' . $raio . '</td>';
    $output .= '<td>' . $email . '</td>';
    $output .= '<td>';
    $output .= '<a href="alterar_cadastro.php?id=' . $id . '">editar</a> | <a href="signup_delete.php?id=' . $id . '">excluir</a>';
    $output .= '</td>';
    $output .= '</tr>';
}

$conn->close();

$output .= '</table>';

echo $output;

?>