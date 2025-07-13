<?php include 'includes/header.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Checkout</h2>

  <div class="row">
    <!-- Coluna Esquerda -->
    <div class="col-md-8">

      <!-- Morada de Entrega -->
      <div class="card mb-4 p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <strong>MORADA DE ENTREGA</strong>
          <button class="btn btn-outline-secondary btn-sm">Editar</button>
        </div>
        <p class="mb-0">Jessica Lara | +12 345 678 910 | Home</p>
        <small class="text-muted">South Meruya Street, Kebon Jeruk, Malang City, East Java 65119</small>
      </div>

      <!-- Produtos -->
      <div class="card mb-4 p-0">
        <div class="card-header bg-white border-0">
          <strong>PRODUCT ORDERED</strong>
        </div>
        <?php if (isset($product_selected)): ?>
        <div class="p-3 border-bottom">
          <div class="d-flex align-items-start gap-3">
            <div class="flex-shrink-0">
              <?php $alt_produto = "Produto " . htmlspecialchars($product_selected['name']); ?>

              <img src="<?php echo base_url("/assets" . $product_selected['image']); ?>" class="img-fluid rounded"
                style="width: 60px;" alt="<?php echo $alt_produto; ?>">
            </div>
            <div class="flex-grow-1">
              <p class="mb-1 text-muted small"><?php echo htmlspecialchars($product_selected['subcategory_name']); ?>
              </p>
              <strong><?php echo htmlspecialchars($product_selected['name']); ?></strong>
              <p class="mb-0"><small><?php echo $quantity_product; ?> item</small> – <strong
                  class="text-danger">€<?php echo $product_selected['with_promo'] ? number_format($product_selected['price_off'] * $quantity_product, 2) : number_format($product_selected['price'] * $quantity_product, 2); ?></strong>
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="p-3 text-center">
          <p class="text-muted">No products selected.</p>
          <a href="<?php echo base_url('products'); ?>" class="btn btn-primary">Select Products</a>
        </div>
        <?php endif; ?>
      </div>

      <!-- Pagamentos -->
      <div class="card p-4">
        <h5 class="mb-4">Pagamentos</h5>

        <form>
          <div class="mb-3">
            <label class="form-label">Select Payment Method</label>
            <div class="btn-group d-flex" role="group">
              <button type="button" class="btn btn-outline-secondary w-100">MULTIBANCO</button>
              <button type="button" class="btn btn-outline-secondary w-100">MBWAY</button>
              <button type="button" class="btn btn-outline-secondary w-100">MASTERCARD</button>
              <button type="button" class="btn btn-outline-secondary w-100">VISA</button>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Card Holder Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
          </div>

          <div class="mb-3">
            <label class="form-label">Credit Card Number</label>
            <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Expiry Date</label>
              <input type="text" class="form-control" placeholder="MM/YY">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">CVV</label>
              <input type="text" class="form-control" placeholder="123">
            </div>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="privacyCheck">
            <label class="form-check-label" for="privacyCheck">
              I accept Terms and Conditions and Privacy Statement
            </label>
          </div>

          <button type="submit" class="btn btn-success w-100">ADICIONAR PAGAMENTO</button>
        </form>
      </div>
    </div>

    <!-- Coluna Direita -->
    <div class="col-md-4">
      <!-- Método de Pagamento Selecionado -->
      <div class="card mb-4 p-3">
        <h6>PAYMENT</h6>
        <div class="d-flex align-items-center gap-2">
          <i class="bi bi-credit-card-2-front-fill text-primary fs-4"></i>
          <div>
            <strong>Jessica Lara</strong><br>
            <small>**** 2219</small>
          </div>
        </div>
        <hr>
        <div class="d-flex align-items-center gap-2">
          <i class="bi bi-wallet2 text-dark fs-5"></i>
          <div>
            <strong>Cash on Delivery</strong>
          </div>
        </div>
      </div>

      <!-- Resumo -->
      <?php
          $quantity_product = isset($quantity_product) ? $quantity_product : 1;
          $product_price    = $product_selected['with_promo'] ? $product_selected['price_off'] : $product_selected['price'];
          $subtotal_price   = number_format($product_price * $quantity_product, 2);

          $estimated_taxes = 9.34;
          $total_price     = $subtotal_price + $estimated_taxes;
      ?>
      <div class="card p-3 mb-4">
        <h6>SUMMARY</h6>
        <ul class="list-unstyled mb-2">
          <li class="d-flex justify-content-between">
            <span>Subtotal</span><span>€<?php echo $subtotal_price; ?></span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Delivery Fee</span><span><s class="text-muted">€5.00</s> <span class="text-success">Free</span></span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Voucher Discount</span><span>-€0.00</span>
          </li>
          <li class="d-flex justify-content-between">
            <span>Estimated Taxes</span><span>€<?php echo number_format($estimated_taxes, 2); ?></span>
          </li>
        </ul>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span><span>€<?php echo number_format($total_price, 2); ?></span>
        </div>
      </div>

      <!-- Voucher -->
      <div class="card p-3 mb-4">
        <h6>Voucher Discount</h6>
        <form>
          <div class="input-group mb-2">
            <input type="text" class="form-control" value="NJKDISCS">
            <button class="btn btn-dark" type="button">Apply Promo</button>
          </div>
          <div class="alert alert-success small mb-0">
            <i class="bi bi-check-circle-fill me-1"></i>
            Voucher Applied! Free shipping.
          </div>
        </form>
      </div>

      <form method="post" action="<?php echo base_url('/checkout/processar'); ?>">
        <input type="hidden" name="product_id" value="<?php echo $product_selected['id']; ?>">
        <input type="hidden" name="quantity" value="<?php echo $quantity_product; ?>">
        <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
        <button type="submit" class="btn btn-success w-100 btn-lg">FINALIZAR PEDIDO
          (€<?php echo number_format($total_price, 2); ?>)</button>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
