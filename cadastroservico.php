<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skedula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">

    <!-- Princial -->
    <div class="container mt-5 p-5 border border-primary">

        <div class="d-grid gap-3 col-6 mx-auto">

            <form action="function/cadastrarservico.php" method="post">

                <div class="mb-3">
                    <label for="nomeServico">Nome do serviço:</label>
                    <input type="text" name="nomeServico" id="">
                </div>
                <div class="mb-3">
                    <label for="selectDuracao">Duração do serviço:</label>
                    <select class="form-select" name="duracao">
                        echo "<option disabled selected>Selecione uma duração</option>";
                        <?php

                        for ($i = 5; $i <= 120; $i += 5) {
                            echo "<option value='$i'>$i minutos</option>";
                        }

                        ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="precoServico">Preço do serviço</label>
                    <input type="number" name="precoservico" id="">
                </div>

                <input type="submit" value="Cadastrar">

            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

</body>

</html>