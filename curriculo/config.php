<?php
$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "7lau3few12211";

try {
    // Criar conexão com PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT nome, descricao, categoria, imagem FROM projetos");
    $stmt->execute();

    $projetos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}


?>