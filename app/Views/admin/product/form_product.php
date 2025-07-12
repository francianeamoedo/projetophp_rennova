<?php include __DIR__ . '/../includes/init_content.php'; ?>

<?php
    $product = $product ?? ['id' => '', 'name' => '', 'price' => '', 'with_promo' => 0, 'active' => 1];

    $isEdit = ! empty($product['id']);
    $title  = $isEdit ? 'Editar Produto' : 'Novo Produto';
?>

<h1 class="h3 mb-4"><?php echo $title ?></h1>

<form class="w-50" action="<?php echo base_url("/products/store") ?>" method="POST" enctype="multipart/form-data">
  <?php if ($isEdit): ?>
  <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
  <?php endif; ?>

  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name"
      value="<?php echo htmlspecialchars($product['name']) ?>" required>
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <textarea class="form-control" id="description" name="description"
      rows="3"><?php echo $product['description'] ?? ''; ?></textarea>
  </div>

  <div class="mb-3">
    <label for="subcategory_id" class="form-label">Subcategoria</label>
    <select class="form-select" id="subcategory_id" name="subcategory_id" required>
      <option value="">Selecione uma subcategoria</option>
      <?php foreach ($subcategories as $subcategory): ?>
      <option value="<?php echo $subcategory['id'] ?>"
        <?php echo $subcategory['id'] === ($product['subcategory_id'] ?? null) ? 'selected' : '' ?>>
        <?php echo htmlspecialchars($subcategory['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="price" class="form-label">Preço (€)</label>
      <input type="number" step="0.01" class="form-control" id="price" name="price" required
        value="<?php echo $product['price'] ?? ''; ?>">
    </div>
    <div class="col-md-6">
      <label for="price_off" class="form-label">Preço com Desconto (€)</label>
      <input type="number" step="0.01" class="form-control" id="price_off" name="price_off"
        value="<?php echo $product['price_off'] ?? '0'; ?>">
    </div>
  </div>

  <div class="mb-3">
    <label for="with_promo" class="form-label">Está em Promoção?</label>
    <select class="form-select" id="with_promo" name="with_promo">
      <option value="1" <?php echo(isset($product['with_promo']) && $product['with_promo'] == 1) ? 'selected' : ''; ?>>
        Sim
      </option>
      <option value="0" <?php echo(isset($product['with_promo']) && $product['with_promo'] == 0) ? 'selected' : ''; ?>>
        Não
      </option>
    </select>
  </div>

  <?php if (! empty($product['image'])): ?>
  <div class="mb-3">
    <label class="form-label">Imagem atual:</label><br>
    <img src="<?php echo base_url('/assets' . $product['image']) ?>" alt="Imagem do Produto" style="max-width: 150px;">
    <input type="hidden" name="current_image" value="<?php echo $product['image'] ?>">
  </div>
  <?php endif; ?>
  <div class="mb-3">
    <label for="image" class="form-label">Imagem do Produto</label>
    <input class="form-control" type="file" id="image" name="image">
  </div>

  <div class="mb-3">
    <label for="rating" class="form-label">Avaliação (Rating)</label>
    <input type="number" step="0.1" class="form-control" id="rating" name="rating"
      value="<?php echo $product['rating'] ?? '5'; ?>">
  </div>

  <div class="mb-4 ms-1">
    <input type="checkbox" class="form-check-input" id="active" name="active" value="1"
      <?php echo $product['active'] == 1 ? 'checked' : '' ?>>
    <label class="form-check-label" for="active">Ativo</label>
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="<?php echo base_url("/products") ?>" class="btn btn-secondary ms-2">Voltar</a>
</form>

<?php include __DIR__ . '/../includes/end_content.php'; ?>