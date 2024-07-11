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

  <form action="">
    <div class="container pt-5">
      <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Olá! Seja bem vindo ao sistema de agendamento<br>Primeiro, selecione a opção desejada:</p>

      <form>
      <div class="d-grid gap-2">

      <a href="servicos.php" class="btn btn-link border border-primary">Agendar horário</a>
      <a href="ovo/datas.php" class="btn btn-link border border-primary">Reagendar horário</a>
      <a href="cancelamento.php" class="btn btn-link border border-primary">Cancelar agendamento</a>

      </div>
      </form>


      <!-- <select class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option selected disabled>Clique aqui para selecionar</option>
        <option value="agenda">Agendar horário</option>
        <option value="reagendar">Reagendar horário</option>
        <option value="cancelar">Cancelar agendamento</option>
      </select> -->

    </div>



    <!-- <div class="container">
      <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default shadow-sm p-3 mb-5 bg-white rounded">
      </div>
    </div> -->
  </form>


  <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 
</body>

</html>