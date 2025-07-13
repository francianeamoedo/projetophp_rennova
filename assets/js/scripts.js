document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".quantity-btn").forEach((button) => {
    console.log("Button found:", button);
    button.addEventListener("click", function () {
      console.log("Button click:", button);

      const productId = this.dataset.productId;
      if (!productId) return;

      const action = this.dataset.action;
      const input = document.querySelector(`#quantity_product_${productId}`);

      if (!input) return;

      let currentValue = parseInt(input.value, 10) || 1;

      if (action === "increment") {
        currentValue += 1;
      } else if (action === "decrement" && currentValue > 1) {
        currentValue -= 1;
      }

      input.value = currentValue;
      input.dispatchEvent(new Event("change"));
    });
  });
});

const btnDescricao = document.getElementById("btn-descricao");
const btnComoUsar = document.getElementById("btn-como-usar");
const btnIngredientes = document.getElementById("btn-ingredientes");
const listaConteudo = document.getElementById("descricao-conteudo");

const conteudos = {
  descricao: [
    "Hidrata profundamente a pele, deixando-a macia e suave.",
    "Protege contra os danos causados pelo sol com SPF 50.",
    "Formulado com ácido hialurônico para retardar sinais de envelhecimento.",
    "Ideal para todos os tipos de pele, inclusive as mais sensíveis.",
  ],
  comoUsar: [
    "Aplicar uma quantidade adequada no rosto limpo e seco.",
    "Massagear suavemente até completa absorção.",
    "Usar diariamente pela manhã e à noite.",
    "Evitar contato direto com os olhos.",
  ],
  ingredientes: [
    "Ácido Hialurônico, Água Termal, Vitamina E, Extrato de Aloe Vera.",
    "Sem parabenos, sem corantes artificiais.",
    "Produto dermatologicamente testado.",
    "Aprovado para peles sensíveis.",
  ],
};

function atualizarConteudo(tipo) {
  listaConteudo.innerHTML = "";
  conteudos[tipo].forEach((frase) => {
    const li = document.createElement("li");
    li.classList.add("list-group-item");
    li.textContent = frase;
    listaConteudo.appendChild(li);
  });
}

function ativarBotao(botao) {
  [btnDescricao, btnComoUsar, btnIngredientes].forEach((b) =>
    b.classList.remove("active")
  );
  botao.classList.add("active");
}

if (btnDescricao) {
  btnDescricao.addEventListener("click", () => {
    atualizarConteudo("descricao");
    ativarBotao(btnDescricao);
  });
}

if (btnComoUsar) {
  btnComoUsar.addEventListener("click", () => {
    atualizarConteudo("comoUsar");
    ativarBotao(btnComoUsar);
  });
}

if (btnIngredientes) {
  btnIngredientes.addEventListener("click", () => {
    atualizarConteudo("ingredientes");
    ativarBotao(btnIngredientes);
  });
}
