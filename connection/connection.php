<?php
$servername = "wmiguel";
$username = "root";
$password = "root";
$dbname = "projscandinavi";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Content-Type:application/json');
    echo json_encode($result);
} else {
    echo "Não há produtos cadastrados.";
}

$conn->close();
?>