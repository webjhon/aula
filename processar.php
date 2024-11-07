<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bolicho"; //nome do banco certo

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = htmlspecialchars($_POST['cpf']);
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);

    $sql = "INSERT INTO clientes (cpf, nome, endereco, telefone, email) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $cpf, $nome, $endereco, $telefone, $email);

        if ($stmt->execute()) {
            header("Location: sucesso.html");
            exit();
        }
        else{
            echo "Erro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro ao preparar a query: " . $conn->error;
    }
}

$conn->close();
?>