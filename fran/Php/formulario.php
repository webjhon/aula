<?php
    
    //config banco de dados
    
    $servername = "localhost";
    $username = "root";
    $password = "@Scoob1nh0";
    $dbname = "mywebsite";
    
    //coenxão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar
    if ($conn -> connect_error) {
    die("Erro na conexão " . $conn->connect_error);
    }
    
    //leitura do formulario
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $name = $_POST['name'];
       $curso = $_POST['curso'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
    
    
    //insere as infrmaçoes do formulario para o banco de dados
    $sql = "INSERT INTO formulario (name, curso, email, telefone) VALUES ('$name','$curso', '$email', '$telefone' ) ";
    
    //verificaçao se deu certo a inserçao
    if ($conn->query($sql)=== TRUE ) {
        header("location: formulario.php");
        echo"ok";
        exit();
    }else{
        echo"erro: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
    
?>
    

    <html>
        <head>
            <title>Formulario</title>
        </head>
        
        <body>
            <h1> Cadastro </h1>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome </label>
                  <input  class="form-control" id="exampleInputEmail1"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Curso </label>
                  <input  class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email </label>
                  <input  class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Telefone </label>
                  <input class="form-control" id="exampleInputEmail1">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            
        </body>

    </html>

