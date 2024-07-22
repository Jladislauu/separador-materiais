<?php
include '../src/db/conexao.php';

$sql = "SELECT id, nome FROM materiais";
$result = $conn->query($sql);

$materiais = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $materiais[] = $row;
    }
} else {
    echo "0 resultados";
}
$conn->close();

echo json_encode($materiais);
?>
