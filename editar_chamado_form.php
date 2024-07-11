<?php

session_start();

require_once('config.php');
if (empty($_SESSION['usuario'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Editar</title>
    <!-- Bootstrap -->
    <link href="<?= (BASE_URL . 'assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Estilo Customizado -->
    <link href="<?= (BASE_URL . 'assets/customizado.css'); ?>" rel="stylesheet">

</head>

<body>
    <form action="finalizar_chamado.php" method="get">
        <div id="login">
            <div class="container container-login ">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-xs-12">
                            <div id="login-form">
                                <div class="text-center" style="font-size: 27px;">
                                    <h2>Editar chamado</h2>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <input type="text" class="form-control" placeholder="tituloChamado" name="tituloChamado" id="tituloChamado">
                                    <label for="floatingInput">Insira um título para o chamado:</label>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <input type="text" class="form-control" placeholder="descricao" name="descricao" id="descricao">
                                    <label for="floatingInput">Insira a descrição:</label>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <input type="number" class="form-control" placeholder="whats" name="whats" id="whats">
                                    <label for="floatingInput">Whatsapp:</label>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <select class="form-select" aria-label="Categoria do Chamado" name="categoria">
                                        <option value=""></option>
                                        <option value="Problema de Hardware">Problema de Hardware</option>
                                        <option value="Problema com lentidão">Problema com lentidão</option>
                                        <option value="Díficuldade com o sistema">Díficuldade com o sistema</option>
                                    </select>
                                    <label for="floatingInput">Categoria:</label>
                                </div>
                                <div class="form-floating col-xs-8 mb-3">
                                    <input type="text" class="form-control" placeholder="Apenas para finalizar" name="resolucao" id="descricao">
                                    <label for="floatingInput">Insira a resolução:</label>
                                </div>
                                <button type="submit" id="btnCriarChamado" class="text-center btn btn-success mt-4" style="width: 100%">Editar</button>
                                <button type="submit" id="btnCriarChamado" class="text-center btn btn-success mt-4" style="width: 100%">finalizar</button>
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