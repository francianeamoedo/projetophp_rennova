<?php include 'includes/header.php'; ?>
<?php include_once 'views/partials/hero.php'; ?>
<?php include 'views/partials/info-bar.php'; ?>

<section class="product-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">As melhores promoções Rennova</h3>
      <p class="text-muted">Experimente uma nova fonte de hidratação, amplifique a beleza e a luminosidade da sua pele.</p>
    </div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
  <?php for ($i = 1; $i <= 8; $i++): ?>
    <div class="col">
      <div class="card product-card h-100 shadow-sm">
        
        <!-- Imagem clicável corretamente estruturada -->
        <a href="creme_facial_com_acido_hialuronico.php">
          <img src="assets/images/produto_exemplo.jpg" class="card-img-top" alt="Produto <?php echo $i; ?>">
        </a>
        
        <div class="card-body d-flex flex-column">
          <!-- conteúdo do card continua aqui -->


          <div class="mb-2">
            <span class="text-warning">★★★★☆</span>
            <small class="text-muted ms-2">(<?php echo rand(10, 50); ?> avaliações)</small>
          </div>

          <h5 class="card-title">Creme Facial com Ácido Hialurônico SPF 50, 40g <?php echo $i; ?></h5>

          <div class="d-flex align-items-baseline gap-2 mb-3">
            <p class="text-muted mb-0"><s>€49,99</s></p>
            <p class="fw-bold text-danger mb-0">€29,99</p>
          </div>

          <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3" data-product-index="<?php echo $i; ?>">
            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="decrement" data-product-index="<?php echo $i; ?>">-</button>
            <input id="quantity-input-<?php echo $i; ?>" type="number" class="form-control text-center quantity-input" value="1" min="1" data-product-index="<?php echo $i; ?>" style="width: 60px;">
            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button" data-action="increment" data-product-index="<?php echo $i; ?>">+</button>
          </div>

          <a href="carrinho.php" class="btn btn-primary mt-auto">Comprar agora</a>

        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>


<section class="novidades-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="fw-bold">Nova linha de cuidados Pure Skin</h3>
      <p class="text-muted">Revitalize, hidrate e ilumine sua pele com o poder da renovação profunda.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
      <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="col">
          <div class="card product-card h-100 shadow-sm">
            <img src="assets/images/produto_exemplo.jpg" class="card-img-top" alt="Novidade <?php echo $i; ?>">
            <div class="card-body d-flex flex-column">

              <div class="mb-2">
                <span class="text-warning">★★★★☆</span>
                <small class="text-muted ms-2">(<?php echo rand(10, 50); ?> 1,412 Reviews)</small>
              </div>

              <h5 class="card-title">Novidade <?php echo $i; ?></h5>

              <div class="d-flex align-items-baseline gap-2 mb-3">
                <p class="text-muted mb-0"><s>€59,99</s></p>
                <p class="fw-bold text-danger mb-0">€39,99</p>
              </div>

              <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
                <input type="number" class="form-control text-center quantity-input" value="1" min="1">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
              </div>

              <a href="#" class="btn btn-primary mt-auto">Comprar agora</a>

            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <div class="text-center">
      <a href="#" class="btn btn-outline-primary btn-lg">OUTRAS LINHAS DE CUIDADO</a>
    </div>

  </div>
</section>

<section class="beneficios-section">
  <img src="assets/images/beneficios_rennova.svg" alt="Benefícios Rennova" class="img-fluid w-60" />
</section>

<!-- Seção com imagem de fundo e título -->
<section class="titulo-bg-section text-center d-flex flex-column justify-content-center align-items-center position-relative">
  <img src="assets/images/background_tittle.svg" alt="Fundo título" class="img-fluid w-100">
  
  <div class="titulo-conteudo position-absolute text-center">
    <h3 class="fw-bold">Popular e Tendência</h3>
    <p class="lead">Avanora’s best products formulated by natural ingredients that provides the best benefit for your skin</p>
  </div>
</section>

<!-- Espaço de 100px -->
<div style="height: 100px;"></div>

<!-- Seção de novidades com cards -->
<section class="popular-tendencia py-5">
  <div class="container">

    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
      <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="col">
          <div class="card product-card h-100 shadow-sm">
            <img src="assets/images/produto_exemplo.jpg" class="card-img-top" alt="Novidade <?php echo $i; ?>">
            <div class="card-body d-flex flex-column">
              <div class="mb-2">
                <span class="text-warning">★★★★☆</span>
                <small class="text-muted ms-2">(<?php echo rand(10, 50); ?> avaliações)</small>
              </div>
              <h5 class="card-title">Novidade <?php echo $i; ?></h5>
              <div class="d-flex align-items-baseline gap-2 mb-3">
                <p class="text-muted mb-0"><s>€59,99</s></p>
                <p class="fw-bold text-danger mb-0">€39,99</p>
              </div>
              <div class="quantity-selector d-flex justify-content-center align-items-center gap-2 mb-3">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
                <input type="number" class="form-control text-center quantity-input" value="1" min="1">
                <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
              </div>
              <a href="#" class="btn btn-primary mt-auto">Comprar agora</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <div class="text-center">
      <a href="#" class="btn btn-outline-primary btn-lg">Ver Todos</a>
    </div>

  </div>
</section>

<!-- Seção com cards de imagem com hover -->
<section class="imagem-cards-section py-5">
  <div class="container">

    <!-- Título e descrição -->
    <div class="text-center mb-5">
      <h3 class="fw-bold">Compre Rennova conforme as necessidades da sua pele</h3>
    </div>

    <!-- Grid de 2 linhas x 3 colunas -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
      <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col">
          <div class="card imagem-card border-0 overflow-hidden">
            <img src="assets/images/imagem_card_<?php echo $i; ?>.jpg" class="card-img img-hover" alt="Imagem <?php echo $i; ?>">
          </div>
        </div>
      <?php endfor; ?>
    </div>

  </div>
</section>

<!-- Seção de Depoimentos -->
<section class="depoimentos-section text-white py-5" style="background: url('assets/images/rennova.svg') no-repeat center center / cover;">
  <div class="container">

    <!-- Título -->
    <div class="text-center mb-5">
      <h3>Depoimento de quem usa Rennova diariamente</h3>
    </div>

    <!-- Linha com 3 colunas -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="col">
          <div class="card h-100 p-4 border-0 shadow-sm bg-opacity-75 text-white depoimento-card">
            <p class="mb-4">“Adoro a sensação de frescor e renovação que esse produto proporciona! Além disso, saber que ele tem ingredientes naturais me deixa ainda mais confiante no uso diário.”</p>
            <div class="d-flex align-items-center mt-auto">
              <img src="assets/images/amanda.jpg" alt="Amanda S." class="rounded-circle me-3" width="50" height="50">
              <div>
                <h6>Amanda S.</h6>
                <h6>Beauty Vlogger</h6>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
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
          "img" => "assets/images/blog1.jpg",
          "desc1" => "20 de junho de 2025",
          "title" => "🟢 Beleza que transforma: Quando o Skincare gera ...",
          "desc2" => "Descubra como o uso de cosméticos pode ir além do autocuida ..."
        ],
        [
          "img" => "assets/images/blog2.jpg",
          "desc1" => "11 de junho de 2025",
          "title" => "🌱 O desafio de ser uma comunidade sustentável hoje",
          "desc2" => "Conheça os principais obstáculos enfrentados por comunidades que ..."
        ],
        [
          "img" => "assets/images/blog3.jpg",
          "desc1" => "09 de janeiro de 2025",
          "title" => "♻️ Economia circular: como a natureza inspira novos ...",
          "desc2" => "Entenda como o reaproveitamento de resíduos das queimadas pode s..."
        ],
        [
          "img" => "assets/images/blog4.jpg",
          "desc1" => "13 de dezembro de 2024",
          "title" => "🤝 Saberes locais e o poder da cooperação comunitária",
          "desc2" => "Veja como a sabedoria tradicional e o trabalho coletivo fortalecem co ..."
        ]
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
      <a href="#" class="btn btn-outline-primary btn-lg">SAIBA MAIS</a>
    </div>

  </div>
</section>

<!-- Seção com imagem de fundo folhas.svg -->
<section class="folhas-section"></section>

<!-- Seção final antes do footer -->
<section class="ultimos-beneficios py-5">
  <div class="container">

    <!-- Título e descrição -->
    <div class="text-center mb-5">
      <h3 class="fw-bold">As nossas certificações</h3>
      <p class="text-muted">Nutrição, tecnologia e sustentabilidade para uma pele saudável todos os dias.</p>
    </div>

    <!-- Linha com 4 colunas -->
    <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
      <div class="col">
        <img src="assets/images/beneficio1.svg" alt="Hidratação" class="img-fluid mb-3" />
        <h6 class="fw-semibold">Hidratação intensa</h6>
      </div>
      <div class="col">
        <img src="assets/images/beneficio2.svg" alt="Luminosidade" class="img-fluid mb-3" />
        <h6 class="fw-semibold">Luminosidade natural</h6>
      </div>
      <div class="col">
        <img src="assets/images/beneficio3.svg" alt="Proteção" class="img-fluid mb-3" />
        <h6 class="fw-semibold">Proteção antioxidante</h6>
      </div>
      <div class="col">
        <img src="assets/images/beneficio4.svg" alt="Regeneração" class="img-fluid mb-3" />
        <h6 class="fw-semibold">Regeneração celular</h6>
      </div>
    </div>

  </div>
</section>





<script src="assets/js/quantity.js"></script>

<?php include 'includes/footer.php'; ?>
