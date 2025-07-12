<?php include __DIR__ . '/../includes/init_content.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h1 class="h4">Categorias</h1>
  <a href="<?php echo base_url('/categories/create') ?>" class="btn btn-primary">Adicionar</a>
</div>

<?php if ($flash = flash('message')): ?>
<div class="alert alert-<?php echo $flash['type'] ?>">
  <?php echo htmlspecialchars($flash['message']) ?>
</div>
<?php endif; ?>

<table class="table table-hover align-middle">
  <thead class="table-light">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Ativa</th>
      <th class="text-end"></th>
    </tr>
  </thead>
  <tbody>
    <?php if (! isset($categories) || empty($categories)): ?>
    <tr>
      <td colspan="4" class="text-center">Nenhuma categoria encontrada.</td>
    </tr>
    <?php else: ?>
    <?php foreach ($categories as $category): ?>
    <tr>
      <td><?php echo $category['id'] ?></td>
      <td><?php echo htmlspecialchars($category['name']) ?></td>
      <td>
        <span
          class="badge                                                                                                                                                                                                                                                                                 <?php echo $category['active'] ? 'bg-success' : 'bg-secondary' ?>"><?php echo $category['active'] ? 'Sim' : 'Não' ?></span>
      </td>
      <td class="text-end">
        <a href="<?php echo base_url("/categories/update/{$category['id']}") ?>"
          class="btn btn-sm btn-warning">Editar</a>
        <form action="<?php echo base_url("/categories/delete/{$category['id']}") ?>" method="POST" class="d-inline">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<?php include __DIR__ . '/../includes/end_content.php'; ?>