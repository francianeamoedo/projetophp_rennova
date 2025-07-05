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
  <h1 class="h3 mb-4">Nova Categoria</h1>

  <form action="/salvar-categoria" method="POST">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome da Categoria</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
    </div>

    <div class="mb-4">
      <label for="ativo" class="form-label">Status</label>
      <select class="form-select" id="ativo" name="ativo">
        <option value="1">Ativo</option>
        <option value="0">Desativado</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Salvar Categoria</button>
    <a href="categories" class="btn btn-secondary ms-2">Cancelar</a>
  </form>
</div>
