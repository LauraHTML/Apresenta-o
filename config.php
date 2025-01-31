<?php
$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "Senai@123";

$conexao = new mysqli($host,$username,$password,$dbname);

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>