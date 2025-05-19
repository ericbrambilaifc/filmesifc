<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo de Filmes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/style.css" />
</head>

<body>


  <!-- Navbar -->
  <header id="header">
    <h1>Catálogo de Filmes</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="serie.php">Series</a></li>
        <li><a href="#">Autores</a></li>
        <li class="dropdown">
          <a href="javascript:void(0)">Gênero</a>
          <div class="dropdown-content">
            <a href="serie.php">Série</a>
            <a href="filmes.php">Filmes</a>
            <a href="doc.php">Documentários</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Carrossel de filmes -->
  <section class="catalogo-section">
    <h2 class="catalogo-titulo">Filmes em Destaque</h2>
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

 

  <?php
  $filmes = [
    ["titulo" => "Velozes e Furiosos 11", "autor" => "Universal", "ano" => 2025, "oscars" => 3, "imagem" => "partials/velozes.png"],
    ["titulo" => "Milionário e José Rico", "autor" => "Showlivre", "ano" => 2000, "oscars" => 0, "imagem" => "partials/milionario.jpg"],
    ["titulo" => "PSG x Inter 2025", "autor" => "Champions League", "ano" => 2025, "oscars" => "Jogos Ao vivo", "imagem" => "partials/psg.jpg"],
    ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "NBA Denver Nuggets x Los Angeles", "autor" => "NBA", "ano" => 2025, "oscars" => "Jogos Ao vivo", "imagem" => "partials/nba.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
  ];
  ?>

  <section class="carrossel-netflix">
    <h2 class="catalogo-titulo">Mais Populares</h2>
    <div class="container-carrossel">
      <?php
      for ($i = 0; $i < count($filmes); $i++) {
      ?>
        <div class="filme-card" onclick="mostrarDetalhes('<?= $filmes[$i]['titulo'] ?>', '<?= $filmes[$i]['autor'] ?>', <?= $filmes[$i]['ano'] ?>,<?= $filmes[$i]['oscars'] ?>, '<?= $filmes[$i]['imagem'] ?>')">
          <img src="<?= $filmes[$i]['imagem'] ?>" alt="<?= $filmes[$i]['titulo'] ?>" />
          <div class="info">
            <h3><?= $filmes[$i]['titulo'] ?></h3>
            <p><?= $filmes[$i]['autor'] ?></p>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>


  <section class="carrossel-netflix">

    <h2 class="catalogo-titulo">Para você</h2>
<div class="container-carrossel">
  <?php
  $filmes2 = [
    ["titulo" => "The Office", "autor" => "Showlivre", "ano" => 1999, "oscars" => 0, "imagem" => "partials/theoffice.jpg"],
    ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg"],
    ["titulo" => "Homem de Ferro 4", "autor" => "Ryan de Oliveira", "ano" => 2028, "oscars" => 0, "imagem" => "partials/homem.jpg"],
   
    ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "NBA Denver Nuggets x Los Angeles", "autor" => "NBA", "ano" => 2025, "oscars" => "Jogos Ao vivo", "imagem" => "partials/nba.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
  ];
  for ($i = 0; $i < count($filmes2); $i++) {
    $modalId = "staticBackdrop" . $i;
  ?>

    <div class="filme-card">
      <img src="<?= $filmes2[$i]['imagem'] ?>" alt="<?= $filmes2[$i]['titulo'] ?>" />
      <div class="info">
        <h3><?= $filmes2[$i]['titulo'] ?></h3>
        <p><?= $filmes2[$i]['autor'] ?></p>

        <!-- Botão que abre o modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">
          Assistir
        </button>

      

      </div>
      
    </div>
  <!-- Modal Bootstrap -->
        <div class="modal fade" id="<?= $modalId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="<?= $modalId ?>Label"><?= $filmes2[$i]['titulo'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <img src="<?= $filmes2[$i]['imagem'] ?>" alt="<?= $filmes2[$i]['titulo'] ?>" width="200" class="img-fluid mb-3" />
                <p class=""><strong >Autor:</strong> <?= $filmes2[$i]['autor'] ?></p>
                <p><strong>Ano:</strong> <?= $filmes2[$i]['ano'] ?></p>
                <p><strong>Oscars:</strong> <?= $filmes2[$i]['oscars'] ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              
              </div>
            </div>
          </div>
        </div>
  <?php
  }
  ?>
</div>

    
  </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>