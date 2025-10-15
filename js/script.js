async function getUser(place) {
    const api_url = `https://timezone.abstractapi.com/v1/current_time/?api_key=da4744df05ad43a5abeee18b526c7951&location=${place}`
    
    const response = await fetch(api_url);
    const data = await response.json();
    
    let time = data.datetime;
    document.getElementById("tempo").innerText = `${place} o fuso é = ${time} ${data.timezone_abbreviation}`
}

// LÓGICA PARA MAPA E MODAL
const modal = document.getElementById('pais-modal');
const modalCountryName = document.getElementById('modal-pais-nome');
const modalCountryInfo = document.getElementById('modal-pais-info');
const closeModalButton = document.querySelector('.modal-fechar');
const modalOverlay = document.querySelector('.modal-overlay');

// Função para fechar o modal
function closeModal() {
    modal.classList.add('modal-hidden');
}

// Adicionar eventos para fechar o modal
closeModalButton.addEventListener('click', closeModal);
modalOverlay.addEventListener('click', closeModal);

// Adiciona eventos para cada país
document.querySelectorAll(".allPaths").forEach(e => {
    e.setAttribute('class', `allPaths ${e.id}`);
    
    // Evento de passar o mouse por cima (mouseover) - sem alterações
    e.addEventListener("mouseover", function () {
        window.onmousemove = function (j) {
            let x = j.clientX;
            let y = j.clientY;
            document.getElementById('nome').style.top = y - 60 + 'px';
            document.getElementById('nome').style.left = x + 10 + 'px';
        }
        const classes = e.className.baseVal.replace(/ /g, '.');
        document.querySelectorAll(`.${classes}`).forEach(country => {
            country.style.fill = "rgb(240, 205, 11)";
        });
        document.getElementById("nome").style.opacity = 1;
        document.getElementById("nome_pais").innerText = e.id;
    });

    // Evento de tirar o mouse de cima (mouseleave) - sem alterações
    e.addEventListener("mouseleave", function () {
        const classes = e.className.baseVal.replace(/ /g, '.');
        document.querySelectorAll(`.${classes}`).forEach(country => {
            country.style.fill = "#ececec";
        });
        document.getElementById("nome").style.opacity = 0;
    });

    // MUDANÇA DO MODAL OCORRE AQUI
    e.addEventListener("click", function () {
        // 1. Preenche o modal com as informações do país clicado
        modalCountryName.innerText = e.id; // e.id é o nome do país (ex: "Brazil")
        modalCountryInfo.innerText = `Aqui você pode carregar informações sobre ${e.id}.`;
        
        // 2. Mostra o modal removendo a classe que o esconde
        modal.classList.remove('modal-hidden');

    });
});