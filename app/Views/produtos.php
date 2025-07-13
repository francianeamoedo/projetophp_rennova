<?php include 'includes/header.php'; ?>

<!-- CONTEÚDO PRINCIPAL -->
<section class="py-5">
  <div class="container">
    <div class="row">

      <!-- BARRA LATERAL DE FILTROS -->
      <div class="col-md-3">
        <h5 class="mb-4">FILTROS</h5>

        <div class="mb-3">
          <label class="form-label">Linhas de Tratamentos</label>
          <select class="form-select">
            <option>Limpeza e Purificação</option>
            <option>Hidratação e Nutrição</option>
            <option>Rejuvenecimento e Tratamento</option>
            <option>Proteção e Revitalização</option>
            <option>Corpo e Bem-Estar</option>
            <option>Kits e Combos</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Sua Necessidade</label>
          <select class="form-select">
            <option>Sabonetes Faciais</option>
            <option>Espumas e Géis de Limpeza</option>
            <option>Água Micelar</option>
            <option>Tônicos Purificantes</option>
            <option>Hidratantes Dia e Noite</option>
            <option>Séruns Nutritivos</option>
            <option>Anti-Idade</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Cuidado Ideal</label>
          <select class="form-select">
            <option>Pele Normal</option>
            <option>Pele Seca</option>
            <option>Pele Mista</option>
            <option>Pele Oleosa</option>
            <option>Pele Sensível</option>
            <option>Pele Jovem</option>
            <option>Pele Madura</option>
          </select>
        </div>
      </div>

      <!-- ÁREA DE PRODUTOS -->
      <div class="col-md-9">

        <!-- BARRA DE PESQUISA E ORDENAÇÃO -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
          <input type="text" class="form-control" placeholder="Pesquisar produtos..." style="max-width: 300px;">

          <select class="form-select" style="max-width: 200px;">
            <option selected>Ordenar por</option>
            <option value="1">Menor preço</option>
            <option value="2">Maior preço</option>
            <option value="3">Mais vendidos</option>
            <option value="4">Melhor avaliação</option>
          </select>
        </div>

        <!-- GRID DE PRODUTOS -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
          <?php foreach ($productsActives as $product): ?>
          <div class="col">
            <div class="card product-card h-100 shadow-sm">

              <?php $altImage = "Produto " . htmlspecialchars($product['name']); ?>

              <a href="<?php echo base_url("/produto/" . $product['id']); ?>" class="text-decoration-none">
                <img src="<?php echo base_url("/assets" . $product['image']); ?>" class="card-img-top"
                  alt="<?php echo $altImage; ?>">
              </a>

              <div class="card-body d-flex flex-column">

                <div class="mb-2">
                  <span class="text-warning">★★★★☆</span>
                  <small class="text-muted ms-2">(<?php echo rand(10, 50); ?> avaliações)</small>
                </div>

                <h5 class="card-title">
                  <?php echo htmlspecialchars($product['name']); ?>
                </h5>

                <div class="d-flex align-items-baseline gap-2 mb-3">
                  <?php if ($product['with_promo'] && $product['price_off'] > 0): ?>
                  <p class="text-muted mb-0"><s>€<?php echo number_format($product['price'], 2); ?></s></p>
                  <p class="fw-bold text-danger mb-0">€<?php echo number_format($product['price_off'], 2); ?></p>
                  <?php else: ?>
                  <p class="fw-bold mb-0">€<?php echo number_format($product['price'], 2); ?></p>
                  <?php endif; ?>
                </div>

                <form action="carrinho" method="POST">

                  <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3"
                    data-product-id="<?php echo $product['id']; ?>">
                    <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="decrement"
                      data-product-id="<?php echo $product['id']; ?>">-</button>

                    <input id="quantity_product_<?php echo $product['id']; ?>"
                      name="quantity_product_<?php echo $product['id']; ?>" type="number"
                      class="form-control text-center quantity-input" value="1" min="1"
                      data-product-id="<?php echo $product['id']; ?>" style="width: 60px;">

                    <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="increment"
                      data-product-id="<?php echo $product['id']; ?>">+</button>
                  </div>

                  <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                  <button type="submit" class="btn btn-primary w-100">Comprar agora</button>
                </form>

              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- PAGINAÇÃO -->
        <nav class="mt-5">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Anterior</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
