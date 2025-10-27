async function getUser(place) {
  const api_url = `https://timezone.abstractapi.com/v1/current_time/?api_key=da4744df05ad43a5abeee18b526c7951&location=${place}`;

  const response = await fetch(api_url);
  const data = await response.json();

  let time = data.datetime;
  document.getElementById(
    "tempo"
  ).innerText = `${place} o fuso é = ${time} ${data.timezone_abbreviation}`;
}

// LÓGICA PARA MAPA E MODAL
const modal = document.getElementById("pais-modal");
const modalCountryName = document.getElementById("modal-pais-nome");
const modalCountryInfo = document.getElementById("modal-pais-info");
const closeModalButton = document.querySelector(".modal-fechar");
const modalOverlay = document.querySelector(".modal-overlay");

// A página PHP que irá processar o pedido e retornar os dados
const PHP_ENDPOINT = "php/conectar.php";

// Função para fechar o modal
function closeModal() {
  modal.classList.add("modal-hidden");
}

// Adicionar eventos para fechar o modal
closeModalButton.addEventListener("click", closeModal);
modalOverlay.addEventListener("click", closeModal);

// Adiciona eventos para cada país
document.querySelectorAll(".allPaths").forEach((e) => {
  e.setAttribute("class", `allPaths ${e.id}`);

  // Evento de passar o mouse por cima (mouseover) - sem alterações
  e.addEventListener("mouseover", function () {
    window.onmousemove = function (j) {
      let x = j.clientX;
      let y = j.clientY;
      document.getElementById("nome").style.top = y - 60 + "px";
      document.getElementById("nome").style.left = x + 10 + "px";
    };
    const classes = e.className.baseVal.replace(/ /g, ".");
    document.querySelectorAll(`.${classes}`).forEach((country) => {
      country.style.fill = "rgb(240, 205, 11)";
    });
    document.getElementById("nome").style.opacity = 1;
    document.getElementById("nome_pais").innerText = e.id;
  });

  // Evento de tirar o mouse de cima (mouseleave) - sem alterações
  e.addEventListener("mouseleave", function () {
    const classes = e.className.baseVal.replace(/ /g, ".");
    document.querySelectorAll(`.${classes}`).forEach((country) => {
      country.style.fill = "#ececec";
    });
    document.getElementById("nome").style.opacity = 0;
  });

  // MUDANÇA DO MODAL OCORRE AQUI
  e.addEventListener("click", function () {
    // 1. Preenche o modal com as informações do país clicado
    console.log(e.id);
    modalCountryName.innerText = e.id; // e.id é o nome do país (ex: "Brazil")
    //modalCountryInfo.innerText = `Aqui você pode carregar informações sobre ${e.id}.`;

    // 2. Mostra o modal removendo a classe que o esconde
    modal.classList.remove("modal-hidden");

    fetch(PHP_ENDPOINT);

    // 3. Faz a requisição ao PHP
    fetch(PHP_ENDPOINT, {
      method: "POST", // É mais seguro para enviar dados
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ country: e.id }), // Envia o nome do país no corpo da requisição
    })
      .then((response) => {
        // Verifica se a resposta foi bem-sucedida (status 200-299)
        if (!response.ok) {
          throw new Error(`Erro HTTP! Status: ${response.status}`);
        }
        // Converte a resposta para um objeto JavaScript (JSON)
        return response.json();
      })
      .then((data) => {
        // 4. Preenche o modal com os dados recebidos do PHP

        // Supondo que 'data' seja um objeto como:
        // { capital: "Brasília", population: "214M", description: "País da América do Sul..." }

        modalCountryName.innerText = data.countryName || countryName; // Usa o nome do país do PHP ou o original
        modalCountryInfo.innerHTML = `
                <strong>Capital:</strong> ${data.capital}<br>
                <strong>População:</strong> ${data.population}<br>
                <p>${data.description}</p>
            `;

        // Aqui você pode adicionar lógica para mostrar outras informações (imagem, etc.)
      })
      .catch((error) => {
        // 5. Trata erros (falha na rede, erro no PHP, etc.)
        console.error("Erro ao carregar dados do país:", error);
        modalCountryInfo.innerText = `Erro ao carregar os dados para ${countryName}. Tente novamente. (${error.message})`;
      });
  });
});
