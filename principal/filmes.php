<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo de Filmes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <style>
    /* Define largura fixa para a imagem do modal */
    #modalImagem {
      width: 200px;
      height: auto; /* mantém a proporção */
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <header>
    <div class="nav-container">
      <h3><a href="index.html" class="fw-bold">Filmes+</a></h3>
      <nav>
        <ul>
          <li><a href="serie.php">Series</a></li>
          <li><a href="filmes.php">Filmes</a></li>
          <li><a href="sobre.php">Sobre Nós</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="catalogo-section">
    <h2 id="catalogo-titulo">Filme em Destaque</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide card-filme">
          <img src="partials/image.png" alt="Harry Potter" />
          <div class="info">
            <h3>Mario Preto</h3>
            <p>Autor: J. K. Rowling</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal genérico -->
  <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content text-white bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="infoModalLabel"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          <img id="modalImagem" src="" alt="" class="img-fluid mb-3" />
          <p><strong>Autor:</strong> <span id="modalAutor"></span></p>
          <p><strong>Ano:</strong> <span id="modalAno"></span></p>
          <p><strong>Oscars:</strong> <span id="modalOscars"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Dados de Filmes Populares e Para Você
  $filmes_populares = [
    ["titulo"=>"Clube da Luta","autor"=>"Televisa","ano"=>1999,"oscars"=>0,"imagem"=>"partials/clubedaluta.jpg","link"=>"https://www.primevideo.com/-/pt/detail/Clube-da-Luta/0N0CS0LQQGWVRXWT1EI6LATOWB"],
    ["titulo"=>"Homem Aranha","autor"=>"Bob Persichetti","ano"=>2018,"oscars"=>0,"imagem"=>"partials/image.png","link"=>"https://www.netflix.com/title/81002747"],
    ["titulo"=>"Milionario e Jose Rico","autor"=>"Jose da Silva","ano"=>1988,"oscars"=>0,"imagem"=>"partials/milionario.jpg","link"=>"https://www.primevideo.com/"],
    ["titulo"=>"Lua","autor"=>"Disney","ano"=>2024,"oscars"=>0,"imagem"=>"partials/lua.jpg","link"=>"https://www.disneyplus.com/"],
    ["titulo"=>"Narcos","autor"=>"Cris Moura","ano"=>2017,"oscars"=>0,"imagem"=>"partials/narcos.jpg","link"=>"https://www.netflix.com/title/80025172"],
    ["titulo"=>"Pica-Pau","autor"=>"Walter Lantz","ano"=>1940,"oscars"=>0,"imagem"=>"partials/pica.jpg","link"=>"https://www.netflix.com/title/80191024"],
    ["titulo"=>"Gravity Falls","autor"=>"Disney","ano"=>2012,"oscars"=>0,"imagem"=>"partials/gravityFalls.jpg","link"=>"https://www.disneyplus.com/"],
    ["titulo"=>"Turma da Monica","autor"=>"Mauricio Araújo de Sousa","ano"=>1963,"oscars"=>0,"imagem"=>"partials/turma.jpg","link"=>"https://www.netflix.com/title/81076856"]
  ];
  $filmes_para_voce = [
    ["titulo"=>"The Office","autor"=>"Showlivre","ano"=>1999,"oscars"=>0,"imagem"=>"partials/theoffice.jpg","link"=>"https://www.netflix.com/title/70136120"],
    ["titulo"=>"Os Sete Monstrinhos","autor"=>"Showlivre","ano"=>1998,"oscars"=>0,"imagem"=>"partials/monstrinhos.jpg","link"=>"https://www.netflix.com/"],
    ["titulo"=>"Homem de Ferro 4","autor"=>"Ryan de Oliveira","ano"=>2028,"oscars"=>0,"imagem"=>"partials/homem.jpg","link"=>"https://www.disneyplus.com/"],
    ["titulo"=>"Champions","autor"=>"Gui e Eric","ano"=>2025,"oscars"=>"Ao vivo","imagem"=>"partials/psg.jpg","link"=>"https://www.espn.com.br/"],
    ["titulo"=>"Chaves","autor"=>"Televisa","ano"=>1999,"oscars"=>0,"imagem"=>"partials/chaves.jpg","link"=>"https://www.primevideo.com/detail/Chaves/0JGKTUD4UOLES3FIEFMC2RRKJY"],
    ["titulo"=>"Breaking Bad","autor"=>"AMC","ano"=>2005,"oscars"=>1,"imagem"=>"partials/BreakingBad.jpg","link"=>"https://www.netflix.com/title/70143836"],
    ["titulo"=>"Kick Buttowski","autor"=>"Disney XD","ano"=>2000,"oscars"=>0,"imagem"=>"partials/kick.jpg","link"=>"https://www.disneyplus.com/"],
    ["titulo"=>"NBA Denver Nuggets x Los Angeles","autor"=>"NBA","ano"=>2025,"oscars"=>"Ao vivo","imagem"=>"partials/nba.jpg","link"=>"https://www.nba.com/" ]
  ];
  ?>

  <!-- Seção Carrossel -->
  <?php function renderSection($tituloSecao, $arrayFilmes) { ?>
  <section class="carrossel-netflix">
    <h2 id="catalogo-titulo"><?php echo $tituloSecao; ?></h2>
    <div class="container-carrossel">
      <?php for ($i = 0; $i < count($arrayFilmes); $i++): ?>
        <div class="filme-card"
             data-titulo="<?= $arrayFilmes[$i]['titulo'] ?>"
             data-autor="<?= $arrayFilmes[$i]['autor'] ?>"
             data-ano="<?= $arrayFilmes[$i]['ano'] ?>"
             data-oscars="<?= $arrayFilmes[$i]['oscars'] ?>"
             data-imagem="<?= $arrayFilmes[$i]['imagem'] ?>">
          <img src="<?= $arrayFilmes[$i]['imagem'] ?>" alt="<?= $arrayFilmes[$i]['titulo'] ?>" />
          <div class="info">
            <h3><?= $arrayFilmes[$i]['titulo'] ?></h3>
            <p><?= $arrayFilmes[$i]['autor'] ?></p>
            <!-- Ícone de Play -->
            <a target="_blank" href="<?= $arrayFilmes[$i]['link'] ?>" class="play-icon">
              <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
            </a>
            <!-- Ícone de Info -->
            <button type="button" class="info-icon btn btn-link text-white p-0" onclick="mostrarDetalhes(this)">
              <i class="bi bi-exclamation-circle" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
            </button>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </section>
  <?php } ?>

  <?php renderSection('Mais Populares', $filmes_populares); ?>
  <?php renderSection('Para Você', $filmes_para_voce); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function mostrarDetalhes(btn) {
      const card = btn.closest('.filme-card');
      document.getElementById('infoModalLabel').textContent = card.dataset.titulo;
      document.getElementById('modalImagem').src = card.dataset.imagem;
      document.getElementById('modalImagem').alt = card.dataset.titulo;
      document.getElementById('modalAutor').textContent = card.dataset.autor;
      document.getElementById('modalAno').textContent = card.dataset.ano;
      document.getElementById('modalOscars').textContent = card.dataset.oscars;
      const modal = new bootstrap.Modal(document.getElementById('infoModal'));
      modal.show();
    }
  </script>

</body>

</html>
