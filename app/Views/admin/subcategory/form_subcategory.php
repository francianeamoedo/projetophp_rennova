<?php include __DIR__ . '/../includes/init_content.php'; ?>

<?php
    $subcategory = $subcategory ?? ['id' => '', 'name' => '', 'active' => 1];

    $isEdit = ! empty($subcategory['id']);
    $title  = $isEdit ? 'Editar Subcategoria' : 'Nova Subcategoria';
?>

<h1 class="h3 mb-4"><?php echo $title ?></h1>

<form class="w-50" action="<?php echo base_url("/subcategories/store") ?>" method="POST">
  <?php if ($isEdit): ?>
  <input type="hidden" name="id" value="<?php echo $subcategory['id'] ?>">
  <?php endif; ?>

  <div class="mb-3">
    <label for="name" class="form-label">Nome da Subcategoria</label>
    <input type="text" class="form-control" id="name" name="name"
      value="<?php echo htmlspecialchars($subcategory['name']) ?>" required>
  </div>

  <div class="mb-3">
    <label for="category_id" class="form-label">Categoria</label>
    <select class="form-select" id="category_id" name="category_id" required>
      <option value="">Selecione uma categoria</option>
      <?php foreach ($categories as $category): ?>
      <option value="<?php echo $category['id'] ?>"
        <?php echo $category['id'] === ($subcategory['category_id'] ?? null) ? 'selected' : '' ?>>
        <?php echo htmlspecialchars($category['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="mb-4 ms-1">
    <input type="checkbox" class="form-check-input" id="active" name="active" value="1"
      <?php echo $subcategory['active'] == 1 ? 'checked' : '' ?>>
    <label class="form-check-label" for="active">Ativo</label>
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="<?php echo base_url("/subcategories") ?>" class="btn btn-secondary ms-2">Voltar</a>
</form>
<?php include __DIR__ . '/../includes/end_content.php'; ?>