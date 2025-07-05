<?php
session_start();
date_default_timezone_set('Europe/Lisbon');

$hora = (int)date('H');

if ($hora >= 6 && $hora < 12) {
  $saudacao = "Bom dia";
} elseif ($hora >= 12 && $hora < 18) {
  $saudacao = "Boa tarde";
} else {
  $saudacao = "Boa noite";
}

$nomeUsuario = $_SESSION['user']['nome'] ?? 'Usuário';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rennova</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- JS Personalizado -->
  <link rel="stylesheet" href="assets/js/scripts.js">
</head>

<body>
  <!-- Main Content -->
  <div class="main-content">
    
    <!-- Header -->
    <div class="top-header d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
      <div>
        <h5 class="m-0"><?= $saudacao ?>, <?= htmlspecialchars($nomeUsuario) ?>!</h5>
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
        <a href="/login" class="btn btn-outline-danger">Logout</a>
      </div>
    </div>






