<?php include __DIR__ . '/../includes/init_content.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h1 class="h4">Products</h1>
  <a href="<?php echo base_url('/products/create') ?>" class="btn btn-primary">Adicionar</a>
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
      <th>Preço</th>
      <th>Promoção</th>
      <th>Ativo</th>
      <th class="text-end"></th>
    </tr>
  </thead>
  <tbody>
    <?php if (! isset($products) || empty($products)): ?>
    <tr>
      <td colspan="6" class="text-center">Nenhum produto encontrado .</td>
    </tr>
    <?php else: ?>
    <?php foreach ($products as $product): ?>
    <tr>
      <td><?php echo $product['id'] ?></td>
      <td><?php echo htmlspecialchars($product['name']) ?></td>
      <td>€ <?php echo number_format(htmlspecialchars($product['price']), 2) ?></td>
      <td><span
          class="badge                                                                                         <?php echo $product['with_promo'] ? 'bg-success' : 'bg-danger' ?>"><?php echo $product['with_promo'] ? 'Sim' : 'Não' ?></span>
      </td>
      <td><span
          class="badge                                                                                         <?php echo $product['active'] ? 'bg-success' : 'bg-secondary' ?>"><?php echo $product['active'] ? 'Sim' : 'Não' ?></span>
      </td>
      <td class="text-end">
        <a href="<?php echo base_url("/products/update/{$product['id']}") ?>" class="btn btn-sm btn-warning">
          Editar
        </a>
        <form action="<?php echo base_url("/products/delete/{$product['id']}") ?>" method="POST" class="d-inline">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-sm btn-danger">
            Excluir
          </button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<?php include __DIR__ . '/../includes/end_content.php'; ?>