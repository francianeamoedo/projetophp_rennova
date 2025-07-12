<?php include __DIR__ . '/../includes/init_content.php'; ?>

<?php
    $category = $category ?? ['id' => '', 'name' => '', 'active' => 1];

    $isEdit = ! empty($category['id']);
    $title  = $isEdit ? 'Editar Categoria' : 'Nova Categoria';
?>

<h1 class="h3 mb-4"><?php echo $title ?></h1>

<form class="w-50" action="<?php echo base_url("/categories/store") ?>" method="POST">
  <?php if ($isEdit): ?>
  <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
  <?php endif; ?>

  <div class="mb-3">
    <label for="name" class="form-label">Nome da Categoria</label>
    <input type="text" class="form-control" id="name" name="name"
      value="<?php echo htmlspecialchars($category['name']) ?>" required>
  </div>

  <div class="mb-4 ms-1">
    <input type="checkbox" class="form-check-input" id="active" name="active" value="1"
      <?php echo $category['active'] == 1 ? 'checked' : '' ?>>
    <label class="form-check-label" for="active">Ativo</label>
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="<?php echo base_url("/categories") ?>" class="btn btn-secondary ms-2">Voltar</a>
</form>

<?php include __DIR__ . '/../includes/end_content.php'; ?>