<div class="d-flex">
  <!-- Sidebar -->
  <div class="scrollbar bg-light p-3" data-simplebar style="width: 200px; height: 100vh; overflow-y: auto;">
    <ul class="navbar-nav" id="navbar-nav">

      <li class="nav-item mb-4 text-center">
        <img src="assets/images/Logotipo.oficial_colorido.png" alt="Rennova Logo" class="img-fluid" style="max-width: 120px;">
      </li>

      <li class="nav-item mb-3 d-flex align-items-center">
        <span class="nav-icon">
          <iconify-icon icon="iconamoon:home-duotone"></iconify-icon>
        </span>
        <span class="menu-title fw-bold ms-2">Dashboard</span>
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
  <h1 class="h3 mb-4">Cadastro de Produto</h1>



<form action="products.php" method="POST" enctype="multipart/form-data">



    <!-- Campo oculto para ID (usado na edição) -->
    <input type="hidden" name="id" value="<?php echo $produto['id'] ?? ''; ?>">

    <div class="mb-3">
      <label for="nome" class="form-label">Nome do Produto</label>
      <input type="text" class="form-control" id="nome" name="nome" required value="<?php echo $produto['nome'] ?? ''; ?>">
    </div>

    <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" class="form-control" id="categoria" name="categoria" required value="<?php echo $produto['categoria'] ?? ''; ?>">
    </div>

    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3"><?php echo $produto['descricao'] ?? ''; ?></textarea>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="preco" class="form-label">Preço (€)</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" required value="<?php echo $produto['preco'] ?? ''; ?>">
      </div>
      <div class="col-md-6">
        <label for="preco_desconto" class="form-label">Preço com Desconto (€)</label>
        <input type="number" step="0.01" class="form-control" id="preco_desconto" name="preco_desconto" value="<?php echo $produto['preco_desconto'] ?? ''; ?>">
      </div>
    </div>

    <div class="mb-3">
      <label for="promocao" class="form-label">Está em Promoção?</label>
      <select class="form-select" id="promocao" name="promocao">
        <option value="1" <?php echo (isset($produto['promocao']) && $produto['promocao'] == 1) ? 'selected' : ''; ?>>Sim</option>
        <option value="0" <?php echo (isset($produto['promocao']) && $produto['promocao'] == 0) ? 'selected' : ''; ?>>Não</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="imagem" class="form-label">Imagem do Produto</label>
      <input class="form-control" type="file" id="imagem" name="imagem">
    </div>

    <div class="mb-3">
      <label for="thumbnail" class="form-label">Thumbnail</label>
      <input class="form-control" type="file" id="thumbnail" name="thumbnail">
    </div>

    <div class="mb-3">
      <label for="rating" class="form-label">Avaliação (Rating)</label>
      <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="<?php echo $produto['rating'] ?? ''; ?>">
    </div>

    <div class="mb-4">
      <label for="ativo" class="form-label">Status</label>
      <select class="form-select" id="ativo" name="ativo">
        <option value="1" <?php echo (isset($produto['ativo']) && $produto['ativo'] == 1) ? 'selected' : ''; ?>>Ativo</option>
        <option value="0" <?php echo (isset($produto['ativo']) && $produto['ativo'] == 0) ? 'selected' : ''; ?>>Desativado</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Salvar Produto</button>
    <a href="products" class="btn btn-secondary ms-2">Cancelar</a>
  </form>
</div>
