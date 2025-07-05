<div class="d-flex">
  <!-- Sidebar -->
  <div class="scrollbar bg-light p-3" data-simplebar style="width: 200px; height: 100vh; overflow-y: auto;">
    <ul class="navbar-nav" id="navbar-nav">

      <li class="nav-item mb-4 text-center">
        <img src="assets/images/Logotipo.oficial_colorido.png" alt="Rennova Logo" class="img-fluid" style="max-width: 120px;">
      </li>

      <li class="nav-item">
        <a class="nav-link" href="dashboard">
        <span class="nav-text">Dashboard</span>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="categories">
        <span class="nav-text">Categorias</span>
        </a>
      </li>

<li class="nav-item">
  <a class="nav-link" href="subcategories">
    <span class="nav-text">Subcategorias</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" href="products">
    <span class="nav-text">Produtos</span>
  </a>
</li>


    </ul>
  </div>

  <!-- Main Content -->
  <div class="flex-grow-1">
    <?php include 'includes/header.php'; ?>

<!-- Content Area -->
<div class="content-body p-4">
  <h1 class="mb-4">Painel de Administração</h1>

  <div class="row g-4">
    <!-- Card: Total de Produtos -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Produtos</h5>
          <p class="card-text fs-4">120</p>
        </div>
      </div>
    </div>

    <!-- Card: Total de Categorias -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Categorias</h5>
          <p class="card-text fs-4">10</p>
        </div>
      </div>
    </div>

    <!-- Card: Total de Subcategorias -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Subcategorias</h5>
          <p class="card-text fs-4">25</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4 mt-4">
    <!-- Card: Vendas do Mês -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Vendas (Mês Atual)</h5>
          <p class="card-text fs-4">R$ 12.345,67</p>
        </div>
      </div>
    </div>

    <!-- Card: Produtos Ativos -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Produtos Ativos</h5>
          <p class="card-text fs-4">98</p>
        </div>
      </div>
    </div>
  </div>
</div>

