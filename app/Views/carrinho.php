<?php include 'includes/header.php'; ?>

<form action="checkout" method="post">
  <section class="container my-5">

    <h2 class="mb-4">Carrinho</h2>

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
                <span class="fw-bold">€<?php echo number_format($product_selected['price_off'], 2, ',', '.'); ?></span>
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
                    min="1" style="width: 60px; height: 32px;">

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
          <h5 class="card-information">Resumo</h5>

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
          <h5 class="card-information">Voucher de Desconto</h5>
          <input type="text" name="voucher" class="form-control mt-2" placeholder="NJKDISC5">
          <button type="button" class="btn btn-outline-secondary-use mt-2">Aplicar Promoção</button>
          <p class="text-success mt-2 small">Voucher aplicado com sucesso! Frete grátis garantido.</p>
        </div>

        <button type="submit" class="btn btn-primary-compra w-100 py-2 fw-bold" id="checkout-btn">
          Checkout (€0,00)
        </button>
      </div>
    </div>
  </section>
</form>

<section class="recomendados py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">Recomendados para Você</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">

      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product11.png" class="card-img-top"
            alt="☀️✨Kit Proteção e Revitalização FPS 50 + Ácido Hialurônico                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php echo $i; ?>">
          <div class="card-body d-flex flex-column">

            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 5100); ?> avaliações)</small>
            </div>

            <h5 class="card-title">☀️✨Kit Proteção e Revitalização FPS 50 + Ácido Hialurônico</h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€129,99</s></p>
              <p class="fw-bold text-danger mb-0">€114,99</p>
            </div>

            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar agora</a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product7.png" class="card-img-top"
            alt="🌿✨ Kit Limpeza Profunda Detox e Reparador Revitalizante<?php echo $i; ?>">
          <div class="card-body d-flex flex-column">

            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 5100); ?> avaliações)</small>
            </div>

            <h5 class="card-title">🌿✨ Kit Limpeza Profunda Detox e Reparador Revitalizante</h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€204,99</s></p>
              <p class="fw-bold text-danger mb-0">€179,99</p>
            </div>

            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar agora</a>

          </div>
        </div>
      </div>


      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product10.png" class="card-img-top"
            alt="✨💖 Kit Rejuvenescimento e Tratamento Avançado Firmador Intensivo<?php echo $i; ?>">
          <div class="card-body d-flex flex-column">

            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 5100); ?> avaliações)</small>
            </div>

            <h5 class="card-title">✨💖 Kit Rejuvenescimento e Tratamento Firmador Intensivo</h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€264,99</s></p>
              <p class="fw-bold text-danger mb-0">€244,99</p>
            </div>

            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar agora</a>

          </div>
        </div>
      </div>



      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product12.png" class="card-img-top"
            alt="💧✨ Ultra Hidratação Revitalizante e Nutrição Profunda<?php echo $i; ?>">
          <div class="card-body d-flex flex-column">

            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 5100); ?> avaliações)</small>
            </div>

            <h5 class="card-title">💧✨ Ultra Hidratação Revitalizante e Nutrição Profunda</h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€254,99</s></p>
              <p class="fw-bold text-danger mb-0">€239,99</p>
            </div>

            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar agora</a>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>

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

updateResumoCompra();
</script>

<?php include 'includes/footer.php'; ?>
