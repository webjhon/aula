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
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, login, password) VALUES ('$name', '$login', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
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
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="">
        Nome: <input type="text" name="name" required><br>
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="password" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>