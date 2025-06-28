<?php include 'includes/header.php'; ?>

<section class="container my-5">

  <h2 class="mb-4">Carrinho (5)</h2>

  <div class="row">
    <!-- COLUNA 1: Lista de Produtos -->
    <div class="col-md-8">
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="card mb-4 cart-item p-3">
          <div class="row g-3 align-items-center">
            <!-- Imagem do Produto -->
            <div class="col-3">
              <img src="assets/images/produto_exemplo.jpg" class="img-fluid rounded" alt="Produto <?php echo $i; ?>">
            </div>

            <!-- Informações do Produto -->
            <div class="col-9">
              <p class="text-muted small mb-1">Serum/Ampoule, Dry Skin, Oily Skin, Sensitive Skin</p>
              <h5 class="mb-2">Nome do Produto <?php echo $i; ?></h5>

              <div class="d-flex align-items-center gap-3 mb-2">
                <span class="fw-bold text-danger">€14,99</span>
                <span class="text-muted text-decoration-line-through">€29,99</span>
                <span class="badge bg-warning text-dark">50% OFF</span>
              </div>

              <div class="d-flex align-items-center gap-3 mb-2">
                <div class="quantity-selector d-flex align-items-center">
                  <button class="btn btn-outline-secondary btn-sm">-</button>
                  <input type="number" class="form-control text-center mx-2 quantity-input" value="1" min="1" style="width: 60px;">
                  <button class="btn btn-outline-secondary btn-sm">+</button>
                </div>

                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-heart"></i></button>
                <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <!-- COLUNA 2: Resumo e Pagamento -->
    <div class="col-md-4">
      <!-- Resumo -->
      <div class="card mb-4 p-3">
        <h5>Resumo</h5>
        <ul class="list-unstyled mb-3">
          <li class="d-flex justify-content-between">
            <span>Subtotal</span>
            <span>€84,96</span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Entrega</span>
            <span>Grátis</span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Desconto (voucher)</span>
            <span>- €0,00</span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Taxas estimadas</span>
            <span>€9,34</span>
          </li>
        </ul>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>€94,30</span>
        </div>
      </div>

      <!-- Voucher -->
      <div class="card mb-4 p-3">
        <h6>Voucher de Desconto</h6>
        <form action="" method="post" class="d-flex gap-2 mt-2">
          <input type="text" name="voucher" class="form-control" placeholder="Digite o código">
          <button type="submit" class="btn btn-outline-primary">Aplicar</button>
        </form>
        <p class="text-success mt-2 small">Voucher aplicado com sucesso! Frete grátis garantido.</p>
      </div>

      <!-- Botão de Checkout -->
      <a href="checkout.php" class="btn btn-success w-100 py-2 fw-bold">
        Checkout (€94,30)
      </a>
    </div>
  </div>
</section>

<section class="container my-5">
  <h3 class="text-center mb-3">Recomendados para Você</h3>
  <p class="text-center text-muted mb-4">Confira nossos produtos selecionados com ofertas imperdíveis</p>

  <div class="scroll-wrapper position-relative">
    <div class="row row-cols-1 row-cols-md-4 g-4 overflow-auto flex-nowrap flex-row" style="display: flex;">
      <!-- Card 1 -->
      <div class="col" style="flex: 0 0 auto; min-width: 250px;">
        <div class="card product-card h-100 text-center p-3 shadow-sm">
          <img src="assets/images/produto1.png" class="card-img-top" alt="Produto 1">

          <div class="card-body">
            <div class="mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <span class="small text-muted">(23 avaliações)</span>
            </div>

            <h5 class="card-title">Creme Facial Rennova</h5>

            <div class="price d-flex justify-content-center align-items-center gap-2 mb-2">
              <span class="text-muted text-decoration-line-through">€54,99</span>
              <span class="fw-bold text-danger">€31,99</span>
            </div>

            <div class="d-flex align-items-center justify-content-center quantity-selector mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center mx-2" value="1" min="1" style="width: 60px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <button class="btn btn-primary w-100">Comprar Agora</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col" style="flex: 0 0 auto; min-width: 250px;">
        <div class="card product-card h-100 text-center p-3 shadow-sm">
          <img src="assets/images/produto2.png" class="card-img-top" alt="Produto 2">

          <div class="card-body">
            <div class="mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <span class="small text-muted">(45 avaliações)</span>
            </div>

            <h5 class="card-title">Sérum Iluminador</h5>

            <div class="price d-flex justify-content-center align-items-center gap-2 mb-2">
              <span class="text-muted text-decoration-line-through">€39,99</span>
              <span class="fw-bold text-danger">€24,99</span>
            </div>

            <div class="d-flex align-items-center justify-content-center quantity-selector mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center mx-2" value="1" min="1" style="width: 60px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <button class="btn btn-primary w-100">Comprar Agora</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col" style="flex: 0 0 auto; min-width: 250px;">
        <div class="card product-card h-100 text-center p-3 shadow-sm">
          <img src="assets/images/produto3.png" class="card-img-top" alt="Produto 3">

          <div class="card-body">
            <div class="mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <span class="small text-muted">(12 avaliações)</span>
            </div>

            <h5 class="card-title">Loção Hidratante</h5>

            <div class="price d-flex justify-content-center align-items-center gap-2 mb-2">
              <span class="text-muted text-decoration-line-through">€44,99</span>
              <span class="fw-bold text-danger">€29,99</span>
            </div>

            <div class="d-flex align-items-center justify-content-center quantity-selector mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center mx-2" value="1" min="1" style="width: 60px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <button class="btn btn-primary w-100">Comprar Agora</button>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col" style="flex: 0 0 auto; min-width: 250px;">
        <div class="card product-card h-100 text-center p-3 shadow-sm">
          <img src="assets/images/produto4.png" class="card-img-top" alt="Produto 4">

          <div class="card-body">
            <div class="mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              <span class="small text-muted">(18 avaliações)</span>
            </div>

            <h5 class="card-title">Máscara Facial Detox</h5>

            <div class="price d-flex justify-content-center align-items-center gap-2 mb-2">
              <span class="text-muted text-decoration-line-through">€49,99</span>
              <span class="fw-bold text-danger">€34,99</span>
            </div>

            <div class="d-flex align-items-center justify-content-center quantity-selector mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center mx-2" value="1" min="1" style="width: 60px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <button class="btn btn-primary w-100">Comprar Agora</button>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>
