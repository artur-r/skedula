<?php

session_start();

require_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    <!-- Bootstrap -->
    <link href="<?= (BASE_URL . 'assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Estilo Customizado -->
    <link href="<?= (BASE_URL . 'assets/customizado.css'); ?>" rel="stylesheet">

</head>

<body>
    <form action="login_fun.php" method="post">
        <div id="login">
            <div class="container container-login ">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-xs-12">
                            <div id="login-form">
                                <div class="text-center" style="font-size: 27px;">
                                    <h2>TESTE</h2>
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
                                <div class="text-center mt-2" id="alert" style="display: none; color:red"></div>
                                <div>
                                    <button type="submit" id="btnEntrar" class="text-center btn btn-success mt-4" style="width: 100%">ENTRAR</button>
                                    <a href="<?= (BASE_URL . 'cadastroChamado.php'); ?>" type="button" class="text-center btn btn-primary mt-4" style="width: 100%">CRIAR CHAMADO</a>
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
    <script src="<?= (BASE_URL . 'assets/customizado.js'); ?>"></script>

    
</body>

</html>