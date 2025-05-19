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

  
  




