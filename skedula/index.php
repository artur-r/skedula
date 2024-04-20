<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skedula</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">

  <div class="container pt-5">
    <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Olá! Seja bem vindo ao sistema de agendamento.</p>
    <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Antes de iniciarmos seu atendimento por favor, me informe:</p>

    <div class="mb-3">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome e sobrenome</label>
        <input type="text" class="form-control" id="inputNome">
      </div>
      <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
      <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nós nunca comparilharemos seu e-mail com ninguém.</div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <a href="function/agendamento.php">Link agendamento</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php 
  echo phpinfo()
  ?>
</body>

</html>