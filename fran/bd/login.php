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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login='$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = $login;
            header("Location:formulario.php");
            exit();
        } else {
            echo "Login ou senha incorretos.";
        }
    } else {
        echo "Login ou senha incorretos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="password" required><br>
        <button type="submit">Logar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>