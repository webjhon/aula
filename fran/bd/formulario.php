<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "@Scoob1nh0";
$dbname = "mywebsite";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $endereco = $_POST['endereco'];
    $curso = $_POST['curso'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO formulario (name, endereco, curso, telefone) VALUES ('$name', '$endereco', '$curso', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: formulario.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="">
        Nome    : <input type="text" name="name" required><br>
        Endereço: <input type="text" name="endereco" required><br>
        Curso   : <input type="text" name="curso" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        <button type="submit">Registrar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>