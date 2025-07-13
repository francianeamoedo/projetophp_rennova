<?php include 'includes/header.php'; ?>

<section class="container py-5">
  <div class="row g-4">

    <!-- COLUNA 1: Imagens pequenas -->
    <div class="col-md-2 d-flex flex-column gap-3">
      <img src="assets/images/thumbnail1.png" class="img-fluid rounded border" alt="Miniatura 1">
      <img src="assets/images/thumbnail2.png" class="img-fluid rounded border" alt="Miniatura 2">
      <img src="assets/images/thumbnail2.png" class="img-fluid rounded border" alt="Miniatura 3">
      <img src="assets/images/thumbnail2.png" class="img-fluid rounded border" alt="Miniatura 4">
    </div>

    <!-- COLUNA 2: Imagem principal -->
    <div class="col-md-5">
      <img src="assets/images/Creme-Facial-acido-Hialuronico.png" class="img-fluid rounded shadow-sm" alt="Produto principal">
    </div>

    <!-- COLUNA 3: Informações -->
    <div class="col-md-5">
      <p class="text-muted mb-1">Rejuvenecimento e Tratamento</p>
      <h2 class="fw-bold">Creme Facial com Ácido Hialurônico SPF 50, 40g</h2>

      <!-- Avaliações -->
       <div class="mb-2">
              <span class="text-warning fs-4">★★★★★</span>
              <small class="text-muted ms-2">(<?php ?> 7,593 Reviews)</small>
            </div>

      <!-- Descrição -->
      <p class="text-muted">
        O Creme Facial Rennova com Ácido Hialurônico e FPS 50 nutre profundamente a pele, suaviza linhas finas e protege
        contra os raios UVA/UVB. Textura leve, rápida absorção e ação antienvelhecimento para uma pele radiante, firme e
        protegida todos os dias.
      </p>

      <!-- Preço -->
      <div class="d-flex align-items-center gap-3 mb-3">
        <span class="fs-4 text-danger fw-bold">€31,99</span>
        <span class="text-muted text-decoration-line-through">€54,99</span>
        <span class="badge bg-danger text-white">40% OFF</span>
      </div>

      <!-- Quantidade -->
      <div class="d-flex align-items-center gap-2 mb-3">
        <button class="btn btn-outline-secondary quantity-btn">-</button>
        <input type="number" class="form-control text-center" value="1" min="1" style="width: 60px;">
        <button class="btn btn-outline-secondary quantity-btn">+</button>
      </div>

      <p class="text-muted">36 Itens em estoque</p>

      <!-- Botões de ação -->
      <div class="d-flex flex-wrap gap-2">
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
        <a href="carrinho" class="btn btn-outline-primary">Comprar Agora</a>
        <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i> Favoritar</button>
      </div>
    </div>
  </div>
</section>

<section class="container py-4">
  <!-- Linha dos botões -->
  <div class="d-flex gap-3 justify-content-start mb-3">
    <button type="button" class="btn btn-outline-primary active" id="btn-descricao">Descrição</button>
    <button type="button" class="btn btn-outline-primary" id="btn-como-usar">Como Usar</button>
    <button type="button" class="btn btn-outline-primary" id="btn-ingredientes">Ingredientes</button>
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

  <!-- Barra de pesquisa e ordenação - alinhada com as colunas abaixo -->
  <div class="row mb-4">
    <div class="col-md-4 d-flex gap-2 flex-wrap align-items-center">
      <input type="text" class="form-control" placeholder="Pesquisar produtos..."
        style="min-width: 0; flex-grow: 1; max-width: 100%;">
    </div>
    <div class="col-md-8 d-flex justify-content-start justify-content-md-end gap-2 flex-wrap">
      <select class="form-select" style="max-width: 200px; min-width: 200px;">
        <option selected>Ordenar por</option>
        <option value="1">Menor preço</option>
        <option value="2">Maior preço</option>
        <option value="3">Mais vendidos</option>
        <option value="4">Melhor avaliação</option>
      </select>
    </div>
  </div>

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
          <img src="assets/images/avaliacao_img1.jpg" alt="Imagem 1" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="assets/images/avaliacao_img2.jpg" alt="Imagem 2" class="img-thumbnail"
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
          <img src="assets/images/avaliacao_img3.jpg" alt="Imagem 3" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="assets/images/avaliacao_img4.jpg" alt="Imagem 4" class="img-thumbnail"
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
          <img src="assets/images/avaliacao_img5.jpg" alt="Imagem 5" class="img-thumbnail"
            style="width: 80px; height: 80px; object-fit: cover;">
          <img src="assets/images/avaliacao_img6.jpg" alt="Imagem 6" class="img-thumbnail"
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

<section class="container my-5">
  <h3 class="text-center mb-3">Destaques da Semana</h3>
  <p class="text-center text-muted mb-4">Confira nossos produtos selecionados com ofertas imperdíveis</p>

  <div class="scroll-wrapper position-relative">
    <div class="row row-cols-1 row-cols-md-4 g-4 overflow-auto flex-nowrap flex-row" style="display: flex;">
      <!-- Card 1 -->
      <div class="col" style="flex: 0 0 auto; min-width: 250px;">
        <div class="card product-card h-100 text-center p-3 shadow-sm">
          <img src="assets/images/product1.png" class="card-img-top" alt="Produto 1">

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
          <img src="assets/images/product2.png" class="card-img-top" alt="Produto 2">

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
          <img src="assets/images/product3.png" class="card-img-top" alt="Produto 3">

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
          <img src="assets/images/product4.png" class="card-img-top" alt="Produto 4">

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


    <!-- Barra de scroll para indicar arrastar -->
    <div class="scroll-indicator text-center mt-3">
      <div class="progress mx-auto" style="max-width: 300px; height: 6px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%;"></div>
      </div>
    </div>
  </div>
</section>



<?php include 'includes/footer.php'; ?>