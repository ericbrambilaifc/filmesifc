<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 5 }
      }
    });
  });

  
  

function mostrarDetalhes(titulo, autor, ano, oscars, imagem) {
 
  console.log("Abrindo modal para: " + titulo); // Verifica se a função foi chamada
  document.getElementById('modalTitulo').innerText = titulo;
  document.getElementById('modalAutor').innerText = "Autor: " + autor;
  document.getElementById('modalAno').innerText = "Ano de Lançamento: " + ano;
  document.getElementById('modalOscars').innerText = "Oscars: " + oscars;
  document.getElementById('modalImagem').src = imagem;

  document.getElementById('modalFilme').style.display = "block";
}


