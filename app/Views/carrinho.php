<?php include 'includes/header.php'; ?>

<form action="checkout" method="post">
  <section class="container my-5">

    <h2 class="mb-4">Carrinho (1)</h2>

    <div class="row">

      <div class="col-md-8">
        <?php if (isset($product_selected)): ?>
        <div class="card mb-4 cart-item p-3 product-item" data-product-id="<?php echo $product_selected['id']; ?>"
          data-price="<?php echo $product_selected['price_off']; ?>">
          <div class="row g-3 align-items-center">
            <?php $alt_produto = "Produto " . htmlspecialchars($product_selected['name']); ?>

            <div class="col-3">
              <img src="<?php echo base_url("/assets" . $product_selected['image']); ?>" class="img-fluid rounded"
                alt="<?php echo $alt_produto; ?>">
            </div>

            <div class="col-9">
              <p class="text-muted small mb-1"><?php echo htmlspecialchars($product_selected['subcategory_name']); ?>
              </p>
              <h5 class="mb-2"><?php echo htmlspecialchars($product_selected['name']); ?></h5>

              <?php
                  $discount = 0;
                  if (
                      $product_selected['price_off'] > 0 &&
                      $product_selected['price'] > 0 &&
                      $product_selected['price_off'] < $product_selected['price']
                  ) {
                      $discount = round((($product_selected['price'] - $product_selected['price_off']) / $product_selected['price']) * 100);
                  }
              ?>

              <div class="d-flex align-items-center gap-3 mb-2">
                <span
                  class="fw-bold text-danger">€<?php echo number_format($product_selected['price_off'], 2, ',', '.'); ?></span>
                <span
                  class="text-muted text-decoration-line-through">€<?php echo number_format($product_selected['price'], 2, ',', '.'); ?></span>

                <?php if ($discount > 0): ?>
                <span class="badge bg-warning text-dark"><?php echo $discount; ?>% OFF</span>
                <?php endif; ?>
              </div>

              <div class="d-flex align-items-center gap-3 mb-2">
                <div class="quantity-selector d-flex align-items-center"
                  data-product-id="<?php echo $product_selected['id']; ?>">
                  <button type="button" class="btn btn-outline-secondary btn-sm quantity-btn" data-action="decrement"
                    data-product-id="<?php echo $product_selected['id']; ?>">-</button>

                  <input type="hidden" name="product_id" value="<?php echo $product_selected['id']; ?>">
                  <input id="quantity_product_<?php echo $product_selected['id']; ?>"
                    name="quantity_product_<?php echo $product_selected['id']; ?>" type="number"
                    value="<?php echo $quantity_product; ?>" class="form-control text-center mx-2 quantity-input"
                    min="1" style="width: 60px;">

                  <button type="button" class="btn btn-outline-secondary btn-sm quantity-btn" data-action="increment"
                    data-product-id="<?php echo $product_selected['id']; ?>">+</button>
                </div>

                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-heart"></i></button>
                <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <div class="col-md-4">
        <!-- Resumo -->
        <div class="card mb-4 p-3">
          <h5>Resumo</h5>
          <ul class="list-unstyled mb-3">
            <li class="d-flex justify-content-between">
              <span>Subtotal</span>
              <span id="subtotal">€0,00</span>
            </li>
            <li class="d-flex justify-content-between">
              <span>Entrega</span>
              <span>Grátis</span>
            </li>
            <li class="d-flex justify-content-between">
              <span>Desconto (voucher)</span>
              <span id="voucher">- €0,00</span>
            </li>
            <li class="d-flex justify-content-between">
              <span>Taxas estimadas</span>
              <span id="tax">€9,34</span>
            </li>
          </ul>
          <hr>
          <div class="d-flex justify-content-between fw-bold">
            <span>Total</span>
            <span id="total">€0,00</span>
          </div>
        </div>

        <div class="card mb-4 p-3">
          <h6>Voucher de Desconto</h6>
          <input type="text" name="voucher" class="form-control" placeholder="Digite o código">
          <button type="button" class="btn btn-outline-primary">Aplicar</button>
          <p class="text-success mt-2 small">Voucher aplicado com sucesso! Frete grátis garantido.</p>
        </div>

        <button type="submit" class="btn btn-success w-100 py-2 fw-bold" id="checkout-btn">
          Checkout (€0,00)
        </button>
      </div>
    </div>
  </section>
</form>

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

    <script type="text/javascript">
    function formatEuro(value) {
      return '€' + value.toFixed(2).replace('.', ',');
    }

    function updateResumoCompra() {
      let subtotal = 0;
      const taxa = 9.34;
      const desconto = 0;

      document.querySelectorAll('.product-item').forEach(item => {
        const price = parseFloat(item.dataset.price);
        const input = item.querySelector('.quantity-input');
        const quantity = parseInt(input.value) || 1;

        subtotal += price * quantity;
      });

      const total = subtotal + taxa - desconto;

      document.getElementById('subtotal').textContent = formatEuro(subtotal);
      document.getElementById('voucher').textContent = '- ' + formatEuro(desconto);
      document.getElementById('total').textContent = formatEuro(total);
      document.getElementById('checkout-btn').textContent = `Checkout (${formatEuro(total)})`;
    }

    document.querySelectorAll('.quantity-input').forEach(input => {
      input.addEventListener('change', updateResumoCompra);
      input.addEventListener('input', updateResumoCompra);
    });

    document.querySelectorAll('.quantity-btn').forEach(button => {

      button.addEventListener('click', function() {
        const productId = this.dataset.productId;
        if (!productId) return;

        const action = this.dataset.action;
        const input = document.querySelector(`#quantity_product_${productId}`);

        if (!input) return;

        let currentValue = parseInt(input.value, 10) || 1;

        if (action === 'increment') {
          currentValue += 1;
        } else if (action === 'decrement' && currentValue > 1) {
          currentValue -= 1;
        }

        input.value = currentValue;
        input.dispatchEvent(new Event('change'));
      });
    });

    updateResumoCompra();
    </script>

    <?php include 'includes/footer.php'; ?>
