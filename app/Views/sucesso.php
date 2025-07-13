<?php include 'includes/header.php'; ?>

<div class="container my-5 text-center">
  <div class="card shadow p-5 mx-auto" style="max-width: 600px;">

    <div class="mb-4 text-success">
      <i class="bi bi-check-circle-fill" style="font-size: 4rem;"></i>
    </div>

    <h2 class="mb-3">Compra Realizada com Sucesso!</h2>
    <p class="text-muted mb-4">Obrigado, <strong>Jessica Lara</strong>. Seu pedido foi processado com sucesso.</p>

    <div class="text-start">
      <h5>Resumo do Pedido</h5>
      <ul class="list-unstyled small mb-4">
        <li><strong>Número do Pedido:</strong> #<?php echo rand(100000, 999999); ?></li>
        <li><strong>Data:</strong>                                                                     <?php echo date('d/m/Y'); ?></li>
        <li><strong>Endereço:</strong> South Meruya Street, Malang City</li>
        <li><strong>Pagamento:</strong> Cartão de Crédito **** 2219</li>
      </ul>

      <h6>Produtos:</h6>
      <ul class="list-group mb-4">
        <li class="list-group-item d-flex justify-content-between">
          <span><?php echo htmlspecialchars($product_selected['name']); ?></span>
          <span>€<?php echo number_format($product_selected['price'], 2); ?> x<?php echo $quantity; ?></span>
        </li>
      </ul>

      <div class="d-flex justify-content-between fw-bold">
        <span>Total Pago:</span>
        <span><?php echo number_format($total_price, 2); ?></span>
      </div>
    </div>

    <a href="<?php echo base_url("/produtos") ?>" class="btn btn-primary mt-4">Continuar Comprando</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
