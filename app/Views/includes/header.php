<!DOCTYPE html>
<html lang="pt-br">

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
</head>

<body>

  <!-- Header com sombra e navegação -->
  <header class="container-fluid shadow-sm bg-white sticky-top">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">

      <!-- Logo -->
      <a href="home" class="d-flex align-items-center mb-3 mb-lg-0 me-3 text-decoration-none">
        <img src="assets/images/Logotipo.oficial_colorido.png" alt="Logo Rennova" style="height: 90px;">
      </a>

      <!-- Caixa de pesquisa -->
      <form class="flex-grow-1 d-flex justify-content-center me-3" role="search">
        <input type="search" class="form-control" style="max-width: 700px; width: 100%;"
          placeholder="Pesquise em mais de 10.000 produtos de beleza" aria-label="Pesquisar">
      </form>

      <!-- Botões de ação -->
      <div class="d-flex align-items-center gap-3">
        <div class="text-center">
          <a href="#" role="button" class="btn btn-sm">
            <i class="bi bi-shop fs-5"></i><br />
            <span class="fs-6">Lojas</span>
          </a>
        </div>
        <div class="text-center">
          <a href="carrinho" role="button" class="btn btn-sm">
            <i class="bi bi-cart fs-5"></i><br />
            <span class="fs-6">Carrinho</span>
          </a>
        </div>
        <div class="text-center">
          <a href="#" role="button" class="btn btn-sm">
            <i class="bi bi-person fs-5"></i><br />
            <span class="fs-6">Iniciar Sessão</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Menu de navegação -->
    <nav class="nav justify-content-center border-top py-2">
      <a class="nav-link text-dark fw-semibold" href="produtos">PRODUTOS</a>
      <a class="nav-link text-dark fw-semibold" href="#">NOVIDADES</a>
      <a class="nav-link text-dark fw-semibold" href="#">PROMOÇÕES</a>
      <a class="nav-link text-dark fw-semibold" href="#">PRESENTES & OFERTAS</a>
      <a class="nav-link text-dark fw-semibold" href="#">DICAS E ROTINAS</a>
    </nav>
  </header>