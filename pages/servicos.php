<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skedula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/custom.css">
</head>

<body class="bg-custom">

    <div class="container pt-5">
        <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Agora. Selecione um serviço e um horário de sua disponibilidade</p>


            <div class="row">
                <?php

                include_once("../function/conexao.php");

                $sql = "SELECT *FROM servicos";
                $consulta = mysqli_query($conn, $sql);


                while ($resultado = mysqli_fetch_assoc($consulta)) {
                    echo "
                        
                        <div class='col-6 col-md-4 mb-3'> 

                        <a href=datas.php?servico=".$resultado['id']." class='text-decoration-none'>
                    <div id ='boxServico' class='container-fluid border border-primary pt-3 bg-dark p-2 text-white bg-opacity-50' >
                     <img src=" . $resultado['imagem_servico'] . " class='mb-2'> 
                     <p class=' fw-semibold fs-5 text-primary text-center' >" . $resultado['nome_servico'] . "</p> 
                     <hr class='mb-1 mt-1'>
                     <p class=' fw-bold fs-6 text-success text-center mb-1' >R$ " . $resultado['preco'] . "</p> 

                    </div>
                    </a>
                </div>";
                }

                ?>

        </form>

    </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="menu.php">Voltar</a></button>

</body>

</html>