<?php
    date_default_timezone_set('Europe/Lisbon');

    $hora = (int) date('H');

    if ($hora >= 6 && $hora < 12) {
        $saudacao = "Bom dia";
    } elseif ($hora >= 12 && $hora < 18) {
        $saudacao = "Boa tarde";
    } else {
        $saudacao = "Boa noite";
    }

    $nomeUsuario = $_SESSION['user']['nome'] ?? 'Usuário';
?>


<!-- Header -->
<header class="top-header d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
  <div>
    <h5 class="m-0"><?php echo $saudacao ?>,&nbsp;<?php echo htmlspecialchars($nomeUsuario) ?>!</h5>
  </div>
  <div class="d-flex gap-3 align-items-center">
    <input type="text" class="form-control" placeholder="Pesquisar..." style="max-width: 300px;">

    <!-- Ícone de Mensagens -->
    <a href="#" class="text-dark position-relative">
      <i class="bi bi-chat-left-text fs-5"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        3
      </span>
    </a>

    <!-- Ícone de Notificações -->
    <a href="#" class="text-dark position-relative">
      <i class="bi bi-bell fs-5"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        5
      </span>
    </a>

    <button class="btn btn-outline-secondary">Profile</button>
    <form action="<?php echo base_url("/logout") ?>" method="POST" class="d-inline">
      <button type="submit" class="btn btn-outline-danger">
        Logout
      </button>
    </form>
  </div>
</header>