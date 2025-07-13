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
          <span>Avanova Serum 30ml</span>
          <span>€14.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Retinol Ampoule 30ml</span>
          <span>€24.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Marine Collagen 30ml</span>
          <span>€24.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Sunscreen SPF 50 30ml</span>
          <span>€19.99</span>
        </li>
      </ul>

      <div class="d-flex justify-content-between fw-bold">
        <span>Total Pago:</span>
        <span>€94.30</span>
      </div>
    </div>

    <a href="<?php echo base_url("/produtos") ?>" class="btn btn-primary mt-4">Continuar Comprando</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
