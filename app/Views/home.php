<?php include 'includes/header.php'; ?>
<?php include_once 'partials/hero.php'; ?>
<?php include 'partials/info-bar.php'; ?>

<section class="product-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">As Melhores Promoções Rennova</h3>
      <p class="text-muted">Experimente uma nova fonte de hidratação, amplifique a beleza e a luminosidade da sua pele.
      </p>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <?php foreach ($productsWithPromo as $product): ?>
      <div class="col">
        <div class="card product-card h-100 shadow-sm">

          <!-- Imagem clicável corretamente estruturada -->
          <a href="produto/<?php echo $product['id']; ?>" class="text-decoration-none">
            <img src="<?php echo base_url("/assets" . $product['image']); ?>" class="card-img-top"
              alt="<?php echo htmlspecialchars($product['name']); ?>">
          </a>

          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <?php
                  $filledStars = str_repeat('★', (int) $product['rating']);
                  $emptyStars  = str_repeat('☆', 5 - (int) $product['rating']);
              ?>
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 5100); ?> avaliações)</small>
            </div>

            <h5 class="card-title">
              <?php echo htmlspecialchars($product['name']); ?>
            </h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€<?php echo number_format($product['price'], 2, ',', '.'); ?></s></p>
              <p class="fw-bold text-danger mb-0">€<?php echo number_format($product['price_off'], 2, ',', '.'); ?></p>
            </div>

            <form action="carrinho" method="post">
              <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3"
                data-product-id="<?php echo $product['id']; ?>">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="decrement"
                  data-product-id="<?php echo $product['id']; ?>">-</button>
                <input id="quantity_product_<?php echo $product['id']; ?>"
                  name="quantity_product_<?php echo $product['id']; ?>" type="number"
                  class="form-control text-center quantity-input" value="1" min="1"
                  data-product-id="<?php echo $product['id']; ?>" style="width: 60px; height: 30px;">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="increment"
                  data-product-id="<?php echo $product['id']; ?>">+</button>
              </div>
              <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">

              <button type="submit" class="btn btn-primary-compra mt-auto w-100">Comprar Agora</button>
            </form>

          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<section class="novidades-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">Nova Linha de Cuidados Pure Skin</h3>
      <p class="text-muted">Revitalize, hidrate e ilumine sua pele com o poder da renovação profunda.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">

      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product11.png" class="card-img-top"
            alt="☀️✨Kit Proteção e Revitalização FPS 50 + Ácido Hialurônico                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <?php echo $i; ?>">
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
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
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
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
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
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
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
              <small class="text-muted ms-2">(<?php echo rand(10, 1500); ?> avaliações)</small>
            </div>

            <h5 class="card-title">💧✨ Ultra Hidratação Revitalizante e Nutrição Profunda</h5>

            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€254,99</s></p>
              <p class="fw-bold text-danger mb-0">€239,99</p>
            </div>

            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar agora</a>

          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn btn-outline-secondary btn-lg">Ver Todos</a>
    </div>

  </div>
</section>


<section class="beneficios-section">
  <img src="assets/images/benefits.png" alt="Benefícios Rennova" class="img-fluid w-60" />
</section>

<!-- Seção com imagem de fundo e título -->
<section
  class="titulo-bg-section text-center d-flex flex-column justify-content-center align-items-center position-relative">
  <img src="assets/images/title.png" alt="Fundo título" class="img-fluid w-100">

  <div class="titulo-conteudo position-absolute text-center">
    <h3 class="fw-bold">Popular e Tendência</h3>
    <p class="lead">Os melhores produtos da Rennova formulados com ingredientes naturais que proporcionam os melhores
      benefícios para sua pele</p>
  </div>
</section>

<!-- Seção de novidades com cards -->
<section class="popular-tendencia py-5">
  <div class="container">

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">

      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product3.png" class="card-img-top"
            alt="Novidade                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php echo $i; ?>">
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 1450); ?> avaliações)</small>
            </div>
            <h5 class="card-title">Combo Skin Brighten Vitamina SPF 30 PA</h5>
            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€169,99</s></p>
              <p class="fw-bold text-danger mb-0">€149,99</p>
            </div>
            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>
            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product5.png" class="card-img-top"
            alt="Novidade                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php echo $i; ?>">
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 8350); ?> avaliações)</small>
            </div>
            <h5 class="card-title">Rennova Skin Bae Beleza Solar SPF 50 PA</h5>
            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€199,99</s></p>
              <p class="fw-bold text-danger mb-0">€139,99</p>
            </div>
            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>
            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product6.png" class="card-img-top"
            alt="Novidade                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php echo $i; ?>">
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 4350); ?> avaliações)</small>
            </div>
            <h5 class="card-title">Rennova Time to Look Glow Up SPF 50 PA</h5>
            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€129,99</s></p>
              <p class="fw-bold text-danger mb-0">€119,99</p>
            </div>
            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>
            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="assets/images/product4.png" class="card-img-top"
            alt="Novidade                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php echo $i; ?>">
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php echo rand(10, 9250); ?> avaliações)</small>
            </div>
            <h5 class="card-title">HydraBalance Tonic Calmante & Glow</h5>
            <div class="d-flex align-items-baseline gap-2 mb-3">
              <p class="text-muted mb-0"><s>€124,99</s></p>
              <p class="fw-bold text-danger mb-0">€109,99</p>
            </div>
            <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
              <input type="number" class="form-control text-center quantity-input" value="1" min="1"
                style="width: 60px; height: 32px;">
              <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
            </div>
            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn btn-outline-secondary btn-lg">Ver Todos</a>
    </div>

  </div>
</section>

<!-- Seção com cards de imagem com hover -->
<section class="imagem-cards-section py-5">
  <div class="container">

    <!-- Título e descrição -->
    <div class="text-center mb-5">
      <h3 class="fw-bold">Compre Rennova Conforme as Necessidades da sua Pele</h3>
    </div>

    <!-- Grid de 2 linhas x 3 colunas -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/product09.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>

      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/product07.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>


      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/product13.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>

    </div>


    <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/envato-labs-image-edi1t.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>


      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/product06.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>


      <div class="col">
        <div class="card imagem-card border-0 overflow-hidden">
          <img src="assets/images/product8.png" class="card-img img-hover" alt="Imagem">
        </div>
      </div>


    </div>

  </div>
</section>

<!-- Título -->
<section
  class="titulo-bg-section text-center d-flex flex-column justify-content-center align-items-center position-relative">
  <img src="<?php echo base_url("/assets/images/RENNOVA.png") ?>" alt="Fundo título" class="img-fluid w-100"
    style="margin-top: 106px">

  <div class="container position-absolute">
    <div class="text-center mb-5">
      <h3 class="fw-bold">Depoimento de Quem Usa Rennova Diariamente</h3>
      <p class="lead text-muted">Descubra como a Rennova transformou rotinas de cuidado em momentos de bem-estar,
        autoestima e
        conexão com a natureza.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
      <div class="col">
        <div class="card text-start h-100 p-4 border-0 shadow-sm bg-opacity-75 depoimento-card">
          <p class="mb-4">“Adoro a sensação de frescor e renovação que esse produto proporciona! Além disso, saber que
            ele tem ingredientes naturais me deixa ainda mais confiante no uso diário.”</p>
          <div class="d-flex align-items-center mt-auto">
            <img src="<?php echo base_url("/assets/images/lovely.png") ?>" alt="Amanda S." class="rounded-circle me-3"
              width="42" height="42">
            <div>
              <h6>Amanda S.</h6>
              <h6>Professora de Biologia</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-start h-100 p-4 border-0 shadow-sm bg-opacity-75 depoimento-card">
          <p class="mb-4">"Sempre tive dificuldade em encontrar um produto que limpasse profundamente sem agredir. Desde
            que comecei a usar Rennova PureSkin, minha pele está mais equilibrada e revitalizada."</p>
          <div class="d-flex align-items-center mt-auto">
            <img src="<?php echo base_url("/assets/images/happy.png") ?>" alt="Jessica L." class="rounded-circle me-3"
              width="42" height="42">
            <div>
              <h6>Jessica L.</h6>
              <h6>Advogada Ambientalista</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-start h-100 p-4 border-0 shadow-sm bg-opacity-75 depoimento-card">
          <p class="mb-4">"Minha pele nunca esteve tão radiante! Sinto uma limpeza profunda sem ressecar, e a maciez
            dura o dia todo. Rennova PureSkin realmente transformou minha rotina de cuidados!"</p>
          <div class="d-flex align-items-center mt-auto">
            <img src="<?php echo base_url("/assets/images/gorgeou.png") ?>" alt="Rachel S." class="rounded-circle me-3"
              width="42" height="42">
            <div>
              <h6>Rachel K.</h6>
              <h6>Empreendedora</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>




<!-- Seção Blog Essência Rennova -->
<section class="blog-rennova-section py-5">
  <div class="container">

    <!-- Título -->
    <div class="text-center mb-5">
      <h3 class="fw-bold">Blog Essência Rennova</h3>
      <p class="lead text-muted">Inspire-se com dicas, cuidados e experiências de beleza</p>
    </div>

    <!-- Cards do Blog -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <?php
          $blogs = [
              [
                  "img"   => base_url("/assets/images/social-impact.png"),
                  "desc1" => "20 de junho de 2025",
                  "title" => "🟢 Beleza que transforma: Quando o Skincare gera ...",
                  "desc2" => "Descubra como o uso de cosméticos pode ir além do autocuida ...",
              ],
              [
                  "img"   => base_url("/assets/images/sustentability.png"),
                  "desc1" => "11 de junho de 2025",
                  "title" => "🌱 O desafio de ser uma comunidade sustentável hoje",
                  "desc2" => "Conheça os principais obstáculos enfrentados por comunidades que ...",
              ],
              [
                  "img"   => base_url("/assets/images/inovation.png"),
                  "desc1" => "09 de janeiro de 2025",
                  "title" => "♻️ Economia circular: como a natureza inspira novos ...",
                  "desc2" => "Entenda como o reaproveitamento de resíduos das queimadas pode s...",
              ],
              [
                  "img"   => base_url("/assets/images/community.png"),
                  "desc1" => "13 de dezembro de 2024",
                  "title" => "🤝 Saberes locais e o poder da cooperação comunitária",
                  "desc2" => "Veja como a sabedoria tradicional e o trabalho coletivo fortalecem co ...",
              ],
          ];

      foreach ($blogs as $blog): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 blog-card bg-transparent">
          <img src="<?php echo $blog['img']; ?>" class="card-img-top" alt="Imagem blog">
          <div class="card-body d-flex flex-column">
            <p class="fst-italic">"<?php echo $blog['desc1']; ?>"</p>
            <h6 class="fw-bold"><?php echo $blog['title']; ?></h6>
            <p class="text-muted"><?php echo $blog['desc2']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Botão Saiba Mais -->
    <div class="text-center mt-5">
      <a href="#" class="btn btn-outline-secondary btn-lg">Saiba Mais</a>
    </div>

  </div>
</section>

<!-- Seção com imagem de fundo folhas.svg -->
<img src="assets/images/folhas.png" alt="Fundo título" class="img-fluid w-100">

<!-- Seção final antes do footer -->
<section class="ultimos-beneficios py-5">
  <div class="container">

    <!-- Título e descrição -->
    <div class="text-center mb-5">
      <h3 class="fw-bold">As Nossas Certificações</h3>
      <p class="text-muted">Nossas certificações garantem a qualidade, segurança e compromisso ambiental dos produtos
        Rennova.</p>
    </div>

    <!-- Linha com 4 colunas -->
    <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
      <div class="col pt-4">
        <img src="<?php echo base_url("/assets/images/fsc.png"); ?>" width="120" alt="FSC" class="img-fluid mb-4" />
        <h6 class="fw-semibold">FOREST STEWARDSHIP COUNCIL</h6>
      </div>
      <div class="col">
        <img src="<?php echo base_url("/assets/images/selo-carbono-zero.png"); ?>" width="150" alt="Carbono Zero"
          class="img-fluid mb-3" />
        <h6 class="fw-semibold">CARBONO ZERO</h6>
      </div>
      <div class="col">
        <img src="<?php echo base_url("/assets/images/cruelty-free.png"); ?>" width="150" alt="Cruelty Free"
          class="img-fluid mb-3" />
        <h6 class="fw-semibold">CRUELTY FREE</h6>
      </div>
      <div class="col">
        <img src="<?php echo base_url("/assets/images/organic-bio.png"); ?>" width="150" alt="Orgânico"
          class="img-fluid mb-3" />
        <h6 class="fw-semibold">ORGÂNICO</h6>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
