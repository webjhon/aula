

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="js/bootstrap.min.js"></script>

    <title>Confirmação</title>
</head>

<body id="corFundo">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-between align-items-center p-4">
                <a href="carrinho.html" class="text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-arrow-left p-0" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </a>
            </div>
            <div class="col-12 text-center mt-2 mb-3">
                <h4>Confirme seus dados aqui!</h4>
            </div>

            <form id="meuForm" action="processar.php" method="POST">
                <div class="form-floating mb-3 form-control-sm p-1">
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF">
                    <label for="cpf">CPF</label>
                </div>
                <div class="form-floating mb-3 form-control-sm p-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                    <label for="nome">Nome</label>
                </div>
                <div class="form-floating mb-3 form-control-sm p-1">
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="form-floating mb-3 form-control-sm p-1">
                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="form-floating form-control-sm p-1">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    <label for="email">Email</label>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div id="botao-finalizar">
                            <button type="submit" class="btn btn-success w-100">Finalizar pedido</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>

        </div>
    </div>
</body>

</html>