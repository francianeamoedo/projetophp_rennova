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
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Subcategorias</h1>
    <a href="create-subcategory" class="btn btn-primary">Nova Subcategoria</a>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Descrição</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Hidratantes</td>
          <td>Cuidados com a Pele</td>
          <td>Produtos para manter a pele hidratada</td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">Editar</a>
            <a href="#" class="btn btn-sm btn-outline-danger">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Filtros Solares</td>
          <td>Proteção Solar</td>
          <td>Subcategorias com fator de proteção solar</td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">Editar</a>
            <a href="#" class="btn btn-sm btn-outline-danger">Excluir</a>
          </td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
      </tbody>
    </table>
  </div>
</div>
