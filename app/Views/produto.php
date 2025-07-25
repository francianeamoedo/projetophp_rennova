<?php include 'includes/header.php'; ?>

<section class="container py-5">
  <div class="row g-4">

    <!-- COLUNA 1: Imagens pequenas -->
    <div class="col-md-1 d-flex flex-column gap-3">
      <img src="<?php echo base_url("/assets/images/thumbnail1.png") ?>" alt="Miniatura 1" class="img-thumbnail">
      <img src="<?php echo base_url("/assets/images/thumbnail2.png") ?>" alt="Miniatura 2" class="img-thumbnail">
      <img src="<?php echo base_url("/assets/images/thumbnail2.png") ?>" alt="Miniatura 3" class="img-thumbnail">
      <img src="<?php echo base_url("/assets/images/thumbnail2.png") ?>" alt="Miniatura 4" class="img-thumbnail">
    </div>

    <!-- COLUNA 2: Imagem principal -->
    <?php
        $altImage = "Produto " . htmlspecialchars($product["name"]);
    ?>
    <div class="col-md-5">
      <img src="<?php echo base_url("/assets/" . $product["image"]) ?>" alt="<?php echo $altImage; ?>"
        class="img-fluid rounded shadow-sm">
    </div>

    <!-- COLUNA 3: Informações -->
    <div class="col-md-5">
      <form action="<?php echo base_url("/carrinho") ?>" method="post">
        <p class="text-muted mb-1"><?php echo htmlspecialchars($product["subcategory_name"]); ?></p>
        <h2 class="fw-bold"><?php echo htmlspecialchars($product["name"]); ?></h2>

        <!-- Avaliações -->
        <div class="mb-2">
          <span class="text-warning fs-4">★★★★★</span>
          <small class="text-muted ms-2">(<?php ?> 7,593 Reviews)</small>
        </div>

        <!-- Descrição -->
        <p class="text-muted">
          <?php echo htmlspecialchars($product["description"]); ?>
        </p>

        <?php
            $discount = 0;
            if ($product['with_promo'] &&
                $product['price_off'] > 0 &&
                $product['price'] > 0 &&
                $product['price_off'] < $product['price']
            ) {
                $discount = round((($product['price'] - $product['price_off']) / $product['price']) * 100);
            }
        ?>

        <!-- Preço -->
        <div class="d-flex align-items-center gap-2 mb-3">
          <?php if ($product['with_promo'] && $product['price_off'] > 0): ?>
          <span class="fs-4 fw-bold">€<?php echo number_format($product["price_off"], 2, ',', '.'); ?></span>
          <span
            class="text-muted text-decoration-line-through">€<?php echo number_format($product["price"], 2, ',', '.'); ?></span>
          <?php if ($discount > 0): ?>
          <span class="badge bg-warning text-dark"><?php echo $discount; ?>% OFF</span>
          <?php endif; ?>
<?php else: ?>
          <span class="fs-4 fw-bold">€<?php echo number_format($product["price"], 2, ',', '.'); ?></span>
          <?php endif; ?>
          <div class="d-flex align-items-center gap-2">
            <div class="quantity-selector d-flex align-items-center" data-product-id="<?php echo $product['id']; ?>">
              <button type="button" class="btn btn-outline-secondary btn-sm quantity-btn" data-action="decrement"
                data-product-id="<?php echo $product['id']; ?>">-</button>

              <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
              <input id="quantity_product_<?php echo $product['id']; ?>"
                name="quantity_product_<?php echo $product['id']; ?>" type="number" value="1"
                class="form-control text-center mx-1 quantity-input" min="1" style="width: 62px; height: 30px;">

              <button type="button" class="btn btn-outline-secondary btn-sm quantity-btn" data-action="increment"
                data-product-id="<?php echo $product['id']; ?>">+</button>
            </div>
          </div>
        </div>

        <p class="text-muted">36 Itens em estoque</p>

        <!-- Botões de ação -->
        <div class="d-flex flex-wrap gap-2">
          <button type="button" class="btn btn-primary-compra">Adicionar ao Carrinho</button>
          <button type="submit" class="btn btn-outline-secondary">Comprar Agora</button>
          <button type="button" class="btn btn-outline-secondary-favorite"><i class="bi bi-bookmark"></i></button>
        </div>
      </form>
    </div>

  </div>
</section>

<section class="container py-4">
  <!-- Linha dos botões -->
  <div class="d-flex gap-3 justify-content-center mb-3">
    <button type="button" class="btn btn-outline-secondary-details w-100" id="btn-descricao">Descrição</button>
    <button type="button" class="btn btn-outline-secondary-use w-100" id="btn-como-usar">Como Usar</button>
    <button type="button" class="btn btn-outline-secondary-details w-100" id="btn-ingredientes">Ingredientes</button>
  </div>

  <!-- Conteúdo da aba (lista com 4 frases) -->
  <div>
    <ul>
      <li>Hidratação intensa e proteção diária em um só gesto.</li>
      <li>Textura leve, rápida absorção e ação antienvelhecimento para uma pele radiante, firme e protegida.</li>
      <li>Nutre a pele, suaviza linhas finas e protege contra os raios UVA/UVB.</li>
      <li>Estimula a produção natural de colágeno, promovendo firmeza e elasticidade da pele com o uso contínuo.</li>
    </ul>
  </div>
</section>
<section class="container py-5">

  <div class="row">

    <!-- Coluna 1: Resumo das avaliações -->
    <div class="col-md-4">
      <h4 class="fw-bold mb-3">Avaliações</h4>

      <!-- Estrelas principais -->
      <div class="mb-2">
        <span class="text-warning fs-4">★★★★★</span>
      </div>

      <!-- Nota média -->
      <div class="mb-4">
        <strong class="fs-3">4.9</strong> / 5.0
      </div>

      <!-- Quantidade de avaliações por estrela -->
      <div>
        <div class="d-flex align-items-center mb-2">
          <span class="me-2 text-warning">★★★★★</span>
          <div class="progress flex-grow-1 me-2" style="height: 10px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>120</small>
        </div>
        <div class="d-flex align-items-center mb-2">
          <span class="me-2 text-warning">★★★★☆</span>
          <div class="progress flex-grow-1 me-2" style="height: 10px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>15</small>
        </div>
        <div class="d-flex align-items-center mb-2">
          <span class="me-2 text-warning">★★★☆☆</span>
          <div class="progress flex-grow-1 me-2" style="height: 10px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 5%;" aria-valuenow="5"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>8</small>
        </div>
        <div class="d-flex align-items-center mb-2">
          <span class="me-2 text-warning">★★☆☆☆</span>
          <div class="progress flex-grow-1 me-2" style="height: 10px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 3%;" aria-valuenow="3"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>4</small>
        </div>
        <div class="d-flex align-items-center mb-2">
          <span class="me-2 text-warning">★☆☆☆☆</span>
          <div class="progress flex-grow-1 me-2" style="height: 10px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 2%;" aria-valuenow="2"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>2</small>
        </div>
      </div>
    </div>

    <!-- Coluna 2: Avaliações individuais -->
    <div class="col-md-8">

      <div class="col-md-8 mb-4">
        <select class="form-select" style="max-width: 200px; min-width: 200px;">
          <option selected>Ordenar por</option>
          <option value="1">Menor preço</option>
          <option value="2">Maior preço</option>
          <option value="3">Mais vendidos</option>
          <option value="4">Melhor avaliação</option>
        </select>
      </div>

      <!-- Avaliação 1 -->
      <div class="mb-4 p-3 border rounded">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="text-warning">★★★★★</span>
          <small class="text-muted">15 de junho de 2025</small>
        </div>
        <h6 class="mb-1">Ana Silva</h6>
        <p>“Produto excelente, minha pele melhorou muito após o uso diário!”</p>

        <!-- Imagens abaixo da mensagem -->
        <div class="d-flex gap-3 mb-3">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
        </div>

        <div class="d-flex align-items-center gap-3">
          <span>Essa avaliação ajudou?</span>
          <button type="button" class="btn btn-outline-success btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-up"></i> 24
          </button>
          <button type="button" class="btn btn-outline-danger btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-down"></i> 2
          </button>
        </div>
      </div>

      <hr>

      <!-- Avaliação 2 -->
      <div class="mb-4 p-3 border rounded">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="text-warning">★★★★☆</span>
          <small class="text-muted">10 de maio de 2025</small>
        </div>
        <h6 class="mb-1">Mariana Costa</h6>
        <p>“Gostei bastante, textura leve e rápida absorção. Recomendo!”</p>

        <div class="d-flex gap-3 mb-3">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
        </div>

        <div class="d-flex align-items-center gap-3">
          <span>Essa avaliação ajudou?</span>
          <button type="button" class="btn btn-outline-success btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-up"></i> 15
          </button>
          <button type="button" class="btn btn-outline-danger btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-down"></i> 1
          </button>
        </div>
      </div>

      <hr>

      <!-- Avaliação 3 -->
      <div class="mb-4 p-3 border rounded">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="text-warning">★★★☆☆</span>
          <small class="text-muted">22 de abril de 2025</small>
        </div>
        <h6 class="mb-1">Fernanda Lima</h6>
        <p>“O produto é bom, mas senti que a fragrância poderia ser mais suave.”</p>

        <div class="d-flex gap-3 mb-3">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="<?php echo base_url("/assets/images/Image.png") ?>" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
        </div>

        <div class="d-flex align-items-center gap-3">
          <span>Essa avaliação ajudou?</span>
          <button type="button" class="btn btn-outline-success btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-up"></i> 8
          </button>
          <button type="button" class="btn btn-outline-danger btn-sm d-flex align-items-center gap-1">
            <i class="bi bi-hand-thumbs-down"></i> 0
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="destque-semana py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">Destaques da Semana</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">

      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="<?php echo base_url("/assets/images/product11.png") ?>" class="card-img-top"
            alt="☀️✨Kit Proteção e Revitalização FPS 50 + Ácido Hialurônico                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <?php echo $i; ?>">
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

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="<?php echo base_url("/assets/images/product7.png") ?>" class="card-img-top"
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

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>

          </div>
        </div>
      </div>


      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="<?php echo base_url("/assets/images/product10.png") ?>"" class=" card-img-top"
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

            <a href="#" class="btn btn-primary-compra mt-auto">Comprar Agora</a>

          </div>
        </div>
      </div>



      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="<?php echo base_url("/assets/images/product12.png") ?>" class="card-img-top"
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








<?php include 'includes/footer.php'; ?>
