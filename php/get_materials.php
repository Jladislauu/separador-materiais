<?php
header('Content-Type: application/json');

// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "separador-tabela"; // Nome correto do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para obter os materiais
$sql = "SELECT id, nome, descricao, codigo, itens, modelo FROM materiais";
$result = $conn->query($sql);

$materiais = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $materiais[] = $row;
    }
}

echo json_encode($materiais);

$conn->close();
?>
