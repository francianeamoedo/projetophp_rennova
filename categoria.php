<?php include 'includes/header.php'; ?>

<!-- CONTEÚDO PRINCIPAL -->
<section class="py-5">
  <div class="container">
    <div class="row">
      
      <!-- BARRA LATERAL DE FILTROS -->
      <div class="col-md-3">
        <h5 class="mb-4">FILTROS</h5>

        <div class="mb-3">
          <label class="form-label">Linhas de Tratamentos</label>
          <select class="form-select">
            <option>Limpeza e Purificação</option>
            <option>Hidratação e Nutrição</option>
            <option>Rejuvenecimento e Tratamento</option>
            <option>Proteção e Revitalização</option>
            <option>Corpo e Bem-Estar</option>
            <option>Kits e Combos</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Sua Necessidade</label>
          <select class="form-select">
            <option>Sabonetes Faciais</option>
            <option>Espumas e Géis de Limpeza</option>
            <option>Água Micelar</option>
            <option>Tônicos Purificantes</option>
            <option>Hidratantes Dia e Noite</option>
            <option>Séruns Nutritivos</option>
            <option>Anti-Idade</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Cuidado Ideal</label>
          <select class="form-select">
            <option>Pele Normal</option>
            <option>Pele Seca</option>
            <option>Pele Mista</option>
            <option>Pele Oleosa</option>
            <option>Pele Sensível</option>
            <option>Pele Jovem</option>
            <option>Pele Madura</option>
          </select>
        </div>
      </div>

      <!-- ÁREA DE PRODUTOS -->
      <div class="col-md-9">

        <!-- BARRA DE PESQUISA E ORDENAÇÃO -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
          <input type="text" class="form-control" placeholder="Pesquisar produtos..." style="max-width: 300px;">
          
          <select class="form-select" style="max-width: 200px;">
            <option selected>Ordenar por</option>
            <option value="1">Menor preço</option>
            <option value="2">Maior preço</option>
            <option value="3">Mais vendidos</option>
            <option value="4">Melhor avaliação</option>
          </select>
        </div>

        <!-- GRID DE PRODUTOS -->
        <div class="row g-4">
          <?php for ($i = 1; $i <= 12; $i++): ?>
            <div class="col-md-3">
              <div class="card product-card h-100 border-0 shadow-sm">
                <img src="assets/images/produto1.jpg" class="card-img-top" alt="Produto <?= $i ?>">
                <div class="card-body">
                  <h6 class="card-title">Produto <?= $i ?></h6>
                  <p class="card-text small text-muted">Breve descrição do produto</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">R$ 31,99</span>
                    <small class="text-muted"><s>R$ 54,99</s></small>
                  </div>
                  <a href="produto.php" class="btn btn-outline-success btn-sm mt-3 w-100">Ver detalhes</a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>

        <!-- PAGINAÇÃO -->
        <nav class="mt-5">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Anterior</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
