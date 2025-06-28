<script>
document.querySelectorAll('.quantity-btn').forEach(button => {
  button.addEventListener('click', () => {
    const action = button.getAttribute('data-action');
    const productIndex = button.getAttribute('data-product-index');
    const input = document.querySelector(`#quantity-input-${productIndex}`);
    let currentValue = parseInt(input.value);

    if (action === 'increment') {
      input.value = currentValue + 1;
    } else if (action === 'decrement' && currentValue > 1) {
      input.value = currentValue - 1;
    }
  });
});


  <script>
  const btnDescricao = document.getElementById('btn-descricao');
  const btnComoUsar = document.getElementById('btn-como-usar');
  const btnIngredientes = document.getElementById('btn-ingredientes');
  const listaConteudo = document.getElementById('descricao-conteudo');

  const conteudos = {
    descricao: [
      "Hidrata profundamente a pele, deixando-a macia e suave.",
      "Protege contra os danos causados pelo sol com SPF 50.",
      "Formulado com ácido hialurônico para retardar sinais de envelhecimento.",
      "Ideal para todos os tipos de pele, inclusive as mais sensíveis."
    ],
    comoUsar: [
      "Aplicar uma quantidade adequada no rosto limpo e seco.",
      "Massagear suavemente até completa absorção.",
      "Usar diariamente pela manhã e à noite.",
      "Evitar contato direto com os olhos."
    ],
    ingredientes: [
      "Ácido Hialurônico, Água Termal, Vitamina E, Extrato de Aloe Vera.",
      "Sem parabenos, sem corantes artificiais.",
      "Produto dermatologicamente testado.",
      "Aprovado para peles sensíveis."
    ]
  };

  function atualizarConteudo(tipo) {
    listaConteudo.innerHTML = '';
    conteudos[tipo].forEach(frase => {
      const li = document.createElement('li');
      li.classList.add('list-group-item');
      li.textContent = frase;
      listaConteudo.appendChild(li);
    });
  }

  function ativarBotao(botao) {
    [btnDescricao, btnComoUsar, btnIngredientes].forEach(b => b.classList.remove('active'));
    botao.classList.add('active');
  }

  btnDescricao.addEventListener('click', () => {
    atualizarConteudo('descricao');
    ativarBotao(btnDescricao);
  });

  btnComoUsar.addEventListener('click', () => {
    atualizarConteudo('comoUsar');
    ativarBotao(btnComoUsar);
  });

  btnIngredientes.addEventListener('click', () => {
    atualizarConteudo('ingredientes');
    ativarBotao(btnIngredientes);
  });

</script>