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
    <h1 class="h3 mb-0">Produtos</h1>
    <a href="create-product" class="btn btn-primary">Novo Produto</a>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Preço com Desconto</th>
          <th>Promoção</th>
          <th>Imagem</th>
          <th>Thumbnail</th>
          <th>Rating</th>
          <th>Status</th>
          <th class="text-end">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Creme Facial</td>
          <td>Cuidados com a Pele</td>
          <td>Creme hidratante com ácido hialurônico</td>
          <td>€54,99</td>
          <td>€31,99</td>
          <td><span class="badge bg-success">Sim</span></td>
          <td><img src="assets/images/produto.jpg" alt="Imagem" class="img-fluid" style="width: 40px; height: 40px; object-fit: cover;"></td>
          <td><img src="assets/images/thumb.jpg" alt="Thumb" class="img-fluid" style="width: 30px; height: 30px; object-fit: cover;"></td>
          <td>4.5</td>
          <td><span class="badge bg-primary">Ativo</span></td>
          <td class="text-end">
            <a href="edit-product.php?id=1" class="btn btn-sm btn-outline-primary me-2">
              <iconify-icon icon="mdi:pencil-outline" class="me-1"></iconify-icon> Editar
            </a>
            <a href="delete-product.php?id=1" class="btn btn-sm btn-outline-danger">
              <iconify-icon icon="mdi:trash-can-outline" class="me-1"></iconify-icon> Excluir
            </a>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Protetor Solar</td>
          <td>Proteção Solar</td>
          <td>FPS 50 com toque seco</td>
          <td>€39,90</td>
          <td>€29,90</td>
          <td><span class="badge bg-danger">Não</span></td>
          <td><img src="assets/images/solar.jpg" alt="Imagem" class="img-fluid" style="width: 40px; height: 40px; object-fit: cover;"></td>
          <td><img src="assets/images/thumb2.jpg" alt="Thumb" class="img-fluid" style="width: 30px; height: 30px; object-fit: cover;"></td>
          <td>4.2</td>
          <td><span class="badge bg-secondary">Desativado</span></td>
          <td class="text-end">
            <a href="edit-product.php?id=2" class="btn btn-sm btn-outline-primary me-2">
              <iconify-icon icon="mdi:pencil-outline" class="me-1"></iconify-icon> Editar
            </a>
            <a href="delete-product.php?id=2" class="btn btn-sm btn-outline-danger">
              <iconify-icon icon="mdi:trash-can-outline" class="me-1"></iconify-icon> Excluir
            </a>
          </td>
        </tr>

        <!-- Outros produtos... -->

      </tbody>
    </table>
  </div>
</div>

