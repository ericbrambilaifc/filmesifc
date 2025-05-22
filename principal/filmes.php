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
    #modalImagem {
      width: 200px;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>


</head>

<body>

  <?php

  $filmes_populares = [
    [
      "titulo" => "Clube da Luta",
      "autor" => "David Fincher",
      "ano" => 1999,
      "oscars" => 0,
      "imagem" => "partials/clubedaluta.jpg",
      "link" => "https://www.netflix.com/title/26004747"
    ],
    [
      "titulo" => "Homem Aranha",
      "autor" => "Bob Persichetti",
      "ano" => 2018,
      "oscars" => 0,
      "imagem" => "partials/image.png",
      "link" => "https://www.netflix.com/title/81002747"
    ],
    [
      "titulo" => "Milionario e Jose Rico",
      "autor" => "Jose da Silva",
      "ano" => 1988,
      "oscars" => 0,
      "imagem" => "partials/milionario.jpg",
      "link" => "https://www.primevideo.com/"
    ],
    [
      "titulo" => "Tropa de Elite",
      "autor" => "José Padilha",
      "ano" => 2007,
      "oscars" => 0,
      "imagem" => "partials/utils/tropa1.jpg",
      "link" => "https://www.netflix.com/title/70136120"

    ],
    [
      "titulo" => "tropa de elite 2",
      "autor" => "José Padilha",
      "ano" => 2010,
      "oscars" => 0,
      "imagem" => "partials/utils/tropa2.jpg",
      "link" => "https://www.netflix.com/title/70136120"
    ],
    [
      "titulo" => "Cidade de Deus",
      "autor" => "Fernando Meirelles",
      "ano" => 2002,
      "oscars" => 0,
      "imagem" => "partials/utils/cidade.jpg",
      "link" => "https://www.netflix.com/title/80191024"
    ],
    [
      "titulo" => "Os suburbanos",
      "autor" => "Luciano Sabino",
      "ano" => 2022,

      "oscars" => 0,
      "imagem" => "partials/utils/suburbanos.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "velozes e furiosos",
      "autor" => "Rob Cohen",
      "ano" => 2001,
      "oscars" => 0,

      "imagem" => "partials/utils/furi.jpg",
      "link" => "https://www.netflix.com/title/81076856"
    ],
    [
      "titulo" => "Velociade Furiosos 2",
      "autor" => "John Singleton",
      "ano" => 2003,
      "oscars" => 0,
      "imagem" => "partials/utils/furi2.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Sátira SuperVelozes",
      "autor" => "David Leitch",
      "ano" => 2019,
      "oscars" => 0,
      "imagem" => "partials/utils/supervelozes.jpg",
      "link" => "https://www.youtube.com/watch?v=lURZze_EB5E"
    ],
    [
      "titulo" => "Ainda estou aqui",
      "autor" => "David Leitch",
      "ano" => 2024,
      "oscars" => 1,
      "imagem" => "partials/utils/ainda.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Vingadores Guerra Infinita",
      "autor" => "Anthony e Joe Russo",
      "ano" => 2018,
      "oscars" => 0,
      "imagem" => "partials/utils/vingadores.jpg",
      "link" => "https://www.disneyplus.com/"
    ]
  ];
  $filmes_para_voce = [
    [
      "titulo" => "Batman",
      "autor" => "Matt Reeves",
      "ano" => 2022,
      "oscars" => 0,
      "imagem" => "partials/utils/bat.jpg",
      "link" => "https://www.netflix.com/title/70136120"
    ],
    [
      "titulo" => "Coringa",
      "autor" => "Todd Phillips",
      "ano" => 2019,
      "oscars" => 2,
      "imagem" => "partials/utils/coringa.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Homem Aranha 3",
      "autor" => "Sam Raimi",
      "ano" => 2007,

      "oscars" => 0,
      "imagem" => "partials/utils/homemaranha.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Pantera Negra",
      "autor" => "Ryan Coogler",
      "ano" => 2018,
      "oscars" => 3,

      "imagem" => "partials/utils/pantera.jpg",
      "link" => "https://www.espn.com.br/"
    ],
    [
      "titulo" => "Enola Holmes",
      "autor" => "Harry Bradbeer",
      "ano" => 2020,

      "oscars" => 0,
      "imagem" => "partials/utils/enola.jpg",
      "link" => "https://www.primevideo.com/detail/Chaves/0JGKTUD4UOLES3FIEFMC2RRKJY"
    ],
    [
      "titulo" => "Ainda estou aqui",
      "autor" => "David Leitch",
      "ano" => 2024,
      "oscars" => 1,
      "imagem" => "partials/utils/ainda.jpg",
      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "Grenn Book",
      "autor" => "Peter Farrelly",
      "ano" => 1962,
      "oscars" => 0,
      "imagem" => "partials/utils/green.jpg",
      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "It a Coisa",
      "autor" => "Andy Muschietti",
      "ano" => 2017,
      "oscars" => 0,
      "imagem" => "partials/utils/it.jpg",

      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "O caixão",
      "autor" => "Gustavo Bonafé",
      "ano" => 2022,

      "oscars" => 0,
      "imagem" => "partials/utils/caixao.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Corra",
      "autor" => "Jordan Peele",
      "ano" => 2017,

      "oscars" => 0,
      "imagem" => "partials/utils/corra.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Rio",
      "autor" => "Carlos Saldanha",
      "ano" => 2011,


      "oscars" => 0,
      "imagem" => "partials/utils/rio.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen",
      "autor" => "John Lasseter",
      "ano" => 2006,
      "oscars" => 0,
      "imagem" => "partials/utils/1.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen 2",
      "autor" => "John Lasseter",
      "ano" => 2011,
      "oscars" => 0,
      "imagem" => "partials/utils/2.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen 3",
      "autor" => "Brian Fee",
      "ano" => 2017,
      "oscars" => 0,
      "imagem" => "partials/utils/3.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen 4",
      "autor" => "Brian Fee",
      "ano" => 2023,
      "oscars" => 0,
      "imagem" => "partials/utils/4.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Rei Leão",
      "autor" => "Roger Allers",
      "ano" => 1994,
      "oscars" => 2,
      "imagem" => "partials/utils/rei.jpg",
      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "Clube da Luta",
      "autor" => "David Fincher",
      "ano" => 1999,
      "oscars" => 0,
      "imagem" => "partials/clubedaluta.jpg",
      "link" => "https://www.netflix.com/title/26004747"
    ],
    [
      "titulo" => "Homem Aranha",
      "autor" => "Bob Persichetti",
      "ano" => 2018,
      "oscars" => 0,
      "imagem" => "partials/image.png",
      "link" => "https://www.netflix.com/title/81002747"
    ],
    [
      "titulo" => "Milionario e Jose Rico",
      "autor" => "Jose da Silva",
      "ano" => 1988,
      "oscars" => 0,
      "imagem" => "partials/milionario.jpg",
      "link" => "https://www.primevideo.com/"
    ],
    [
      "titulo" => "Tropa de Elite",
      "autor" => "José Padilha",
      "ano" => 2007,
      "oscars" => 0,
      "imagem" => "partials/utils/tropa1.jpg",
      "link" => "https://www.netflix.com/title/70136120"

    ],
    [
      "titulo" => "tropa de elite 2",
      "autor" => "José Padilha",
      "ano" => 2010,
      "oscars" => 0,
      "imagem" => "partials/utils/tropa2.jpg",
      "link" => "https://www.netflix.com/title/70136120"
    ],
    [
      "titulo" => "Cidade de Deus",
      "autor" => "Fernando Meirelles",
      "ano" => 2002,
      "oscars" => 0,
      "imagem" => "partials/utils/cidade.jpg",
      "link" => "https://www.netflix.com/title/80191024"
    ],
    [
      "titulo" => "Os suburbanos",
      "autor" => "Luciano Sabino",
      "ano" => 2022,

      "oscars" => 0,
      "imagem" => "partials/utils/suburbanos.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "velozes e furiosos",
      "autor" => "Rob Cohen",
      "ano" => 2001,
      "oscars" => 0,

      "imagem" => "partials/utils/furi.jpg",
      "link" => "https://www.netflix.com/title/81076856"
    ],
    [
      "titulo" => "Velociade Furiosos 2",
      "autor" => "John Singleton",
      "ano" => 2003,
      "oscars" => 0,
      "imagem" => "partials/utils/furi2.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Sátira SuperVelozes",
      "autor" => "David Leitch",
      "ano" => 2019,
      "oscars" => 0,
      "imagem" => "partials/utils/supervelozes.jpg",
      "link" => "https://www.youtube.com/watch?v=lURZze_EB5E"
    ],
    [
      "titulo" => "Ainda estou aqui",
      "autor" => "David Leitch",
      "ano" => 2024,
      "oscars" => 1,
      "imagem" => "partials/utils/ainda.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Vingadores Guerra Infinita",
      "autor" => "Anthony e Joe Russo",
      "ano" => 2018,
      "oscars" => 0,
      "imagem" => "partials/utils/vingadores.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Homem Aranha 3",
      "autor" => "Sam Raimi",
      "ano" => 2007,

      "oscars" => 0,
      "imagem" => "partials/utils/homemaranha.jpg",
      "link" => "https://www.disneyplus.com/"
    ],
    [
      "titulo" => "Pantera Negra",
      "autor" => "Ryan Coogler",
      "ano" => 2018,
      "oscars" => 3,

      "imagem" => "partials/utils/pantera.jpg",
      "link" => "https://www.espn.com.br/"
    ],
    [
      "titulo" => "Enola Holmes",
      "autor" => "Harry Bradbeer",
      "ano" => 2020,

      "oscars" => 0,
      "imagem" => "partials/utils/enola.jpg",
      "link" => "https://www.primevideo.com/detail/Chaves/0JGKTUD4UOLES3FIEFMC2RRKJY"
    ],
    [
      "titulo" => "Ainda estou aqui",
      "autor" => "David Leitch",
      "ano" => 2024,
      "oscars" => 1,
      "imagem" => "partials/utils/ainda.jpg",
      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "Grenn Book",
      "autor" => "Peter Farrelly",
      "ano" => 1962,
      "oscars" => 0,
      "imagem" => "partials/utils/green.jpg",
      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "It a Coisa",
      "autor" => "Andy Muschietti",
      "ano" => 2017,
      "oscars" => 0,
      "imagem" => "partials/utils/it.jpg",

      "link" => "https://www.netflix.com/"

    ],
    [
      "titulo" => "O caixão",
      "autor" => "Gustavo Bonafé",
      "ano" => 2022,

      "oscars" => 0,
      "imagem" => "partials/utils/caixao.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Corra",
      "autor" => "Jordan Peele",
      "ano" => 2017,

      "oscars" => 0,
      "imagem" => "partials/utils/corra.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Rio",
      "autor" => "Carlos Saldanha",
      "ano" => 2011,


      "oscars" => 0,
      "imagem" => "partials/utils/rio.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen",
      "autor" => "John Lasseter",
      "ano" => 2006,
      "oscars" => 0,
      "imagem" => "partials/utils/1.jpg",
      "link" => "https://www.netflix.com/"
    ],
    [
      "titulo" => "Relampago do mcqueen 2",
      "autor" => "John Lasseter",
      "ano" => 2011,
      "oscars" => 0,
      "imagem" => "partials/utils/2.jpg",
      "link" => "https://www.netflix.com/"
    ],
  ];
  ?>


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
          <li><a href="genero.php">Genero</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="catalogo-section">
    <h2 id="catalogo-titulo">Filme em Destaque</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide card-filme"
          data-titulo="Homem Aranha"
          data-autor="Bob Persichetti"
          data-ano="2018"
          data-oscars="0"
          data-imagem="partials/image.png">
          <img src="partials/image.png" alt="Homem Aranha" />
          <div class="info">
            <h3>Homem Aranha</h3>
            <p>Autor: Bob Persichetti</p>
          </div>
          <a target="_blank" href="https://www.netflix.com/title/81002747" class="play-icon">
            <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
          </a>

          <button type="button" class="info-icon btn btn-link text-white p-0" style="background: none; border: none;">
            <i class="bi bi-exclamation-circle"
              style="color: white; font-size: 2rem; margin-left: 6px; cursor:pointer;"
              onclick="mostrarDetalhes(this)"></i>
          </button>
        </div>
      </div>
    </div>
    <h1>Filmes por Gênero</h1>
    <form method="get">
      <label for="genero">Escolha um gênero:</label>
      <select name="genero" id="genero" onchange="this.form.submit()">
        <option value="">-- Todos --</option>
        <?php foreach ($generos as $genero): ?>
          <option value="<?= htmlspecialchars($genero) ?>" <?= ($genero === $genero_selecionado) ? 'selected' : '' ?>>
            <?= htmlspecialchars($genero) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </form>

    <?php if (!empty($genero_selecionado)): ?>
      <h2>Séries do gênero "<?= htmlspecialchars($genero_selecionado) ?>"</h2>
      <?php if (!empty($series_filtradas)): ?>
        <?php foreach ($series_filtradas as $serie): ?>
          <div class="serie">
            <img src="<?= htmlspecialchars($serie['imagem']) ?>" alt="<?= htmlspecialchars($serie['titulo']) ?>">
            <div>
              <h3><?= htmlspecialchars($serie['titulo']) ?></h3>
              <p><strong>Autor:</strong> <?= htmlspecialchars($serie['autor']) ?></p>
              <p><strong>Ano:</strong> <?= htmlspecialchars($serie['ano']) ?></p>
              <p><a href="<?= htmlspecialchars($serie['link']) ?>">Ver mais</a></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Não há séries para este gênero.</p>
      <?php endif; ?>
    <?php else: ?>
      <p>Selecione um gênero para ver as séries correspondentes.</p>
    <?php endif; ?>

  </section>


  <!-- modal  -->
  <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content text-white bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" style="color: #fff; font-size: 14px;" id="infoModalLabel"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div style="color: #fff;" class="modal-body">
          <img id="modalImagem" src="" alt="" class="img-fluid mb-3" />
          <p><strong>Autor:</strong> <span id="modalAutor"></span></p>
          <p><strong>Ano:</strong> <span id="modalAno"></span></p>
          <p><strong>Oscars:</strong> <span id="modalOscars"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" style="background-color: #991818; color: #fff;" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Seção Carrossel -->
  <?php function renderSection($tituloSecao, $arrayFilmes)
  { ?>
    <section class="carrossel-netflix">
      <h2 id="catalogo-titulo"><?php echo $tituloSecao; ?></h2>
      <div class="container-carrossel">

        <?php for ($i = 0; $i < count($arrayFilmes); $i++): ?>

          <div style="padding-bottom: 25px;" class="filme-card" data-titulo="<?= $arrayFilmes[$i]['titulo'] ?>"
            data-autor="<?= $arrayFilmes[$i]['autor'] ?>" data-ano="<?= $arrayFilmes[$i]['ano'] ?>"
            data-oscars="<?= $arrayFilmes[$i]['oscars'] ?>" data-imagem="<?= $arrayFilmes[$i]['imagem'] ?>">
            <img src="<?= $arrayFilmes[$i]['imagem'] ?>" alt="<?= $arrayFilmes[$i]['titulo'] ?>" />


            <div class="info">

              <h3><?= $arrayFilmes[$i]['titulo'] ?></h3>
              <p><?= $arrayFilmes[$i]['autor'] ?></p>

              <a target="_blank" href="<?= $arrayFilmes[$i]['link'] ?>" class="play-icon">
                <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
              </a>

              <button type="button" class="info-icon btn btn-link text-white p-0" style="background: none; border: none;">
                <i class="bi bi-exclamation-circle" style="color: white; font-size: 2rem; margin-left: 6px; cursor:pointer;"
                  onclick="mostrarDetalhes(this)"></i>
              </button>

            </div>
          </div>
        <?php endfor; ?>
      </div>
    </section>
  <?php } ?>

  <?php renderSection('Mais Populares', $filmes_populares); ?>
  <?php renderSection('Para Você', $filmes_para_voce); ?>


  <!-- Rodapé -->

  <footer>
    <div class="footer-container">
      <div class="footer-links">
        <ul>
          <li><a href="sobre.php">Sobre Nós</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </div>
      <div class="footer-info">
        <p>&copy; 2025 Filmes+. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function mostrarDetalhes(btn) {
      const card = btn.closest('[data-titulo]');
      if (!card) return;

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