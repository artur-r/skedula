<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="cad_usuario.php" method="post">
        <div id="login">
            <div class="container container-login ">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-xs-12">
                            <div id="login-form">
                                <div class="text-center" style="font-size: 27px;">
                                    <h2>Cadastrar usuário</h2>
                                </div>
                                <div class="text-center">
                                    <p>Preencha os dados do login para acessar</h2>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
                                    <label for="floatingInput">Usuario</label>
                                </div>
                                <div class="form-floating col-xs-8">
                                    <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                                    <label for="floatingPassword">Senha</label>
                                </div>
                                <div>
                                <select class="form-select" aria-label="setor" name="setor">
                                        <option value=""></option>
                                        <option value="administracao">Administração</option>
                                        <option value="sup">Suporte</option>
                                        <option value="dev">Desenvolvimento</option>
                                    </select>
                                </div>
                                <div class="text-center mt-2" id="alert" style="display: none; color:red"></div>
                                <div>
                                    <button type="submit" id="btnEntrar" class="text-center btn btn-success mt-4" style="width: 100%">Cadastrar usuário</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Scripts -->
    <script src="<?= (BASE_URL . 'assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>


    <a href="index.php">Voltar</a>

    
</body>



</html>