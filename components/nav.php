<nav class="navbar navbar-expand-lg bg-dark-subtle  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Clamarie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Chamados abertos
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="index.php">suporte</a></li>
          <li><a class="dropdown-item" href="chamados_dev.php">desenvolvimento</a></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="chamados_finalizados.php">Chamados Finalizados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroChamado.php">Criar chamado</a>
        </li>
        <li class="nav-item">
          <?php
          if ($_SESSION['setor'] == 'administracao') {
            echo "<a href='cad_usuario_form.php' class='nav-link active' aria-current='page'>Cadastrar novo usuário </a>";
          } else {
            echo "<a href='components/acessonegado.php' id='usuario_des' class='nav-link' aria-current='page'>Cadastrar novo usuário </a>";
          }
          ?>
        </li>
        <li class="nav-item dropdown">

      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

