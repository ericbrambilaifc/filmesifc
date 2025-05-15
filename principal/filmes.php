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
        <li><a href="#">Início</a></li>
        <li><a href="#">Autores</a></li>
        <li><a href="index.php">Home</a></li>
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

        <div class="swiper-slide card-filme">
          <img src="partials/velozes.png" alt="VElozes e Furuozos 11" />
          <div class="info">
            <h3>velozes e Furiozos</h3>
            <p>Autor: Marvel</p>
          </div>
        </div>



      </div>
    </div>
  </section>

<?php
$filmes = [
    ["titulo" => "Velozes e Furiosos 11", "autor" => "Universal", "imagem" => "partials/velozes.png"],
    ["titulo" => "Milionário e José Rico", "autor" => "Showlivre", "imagem" => "partials/milionario.jpg"],
    ["titulo" => "PSG x Inter 2025", "autor" => "Champions League", "imagem" => "partials/psg.jpg"],
    ["titulo" => "Chaves", "autor" => "Televisa", "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "imagem" => "partials/kick.jpg"],
    ["titulo" => "NBA Dnver Nuggs x Los Angles", "autor" =>"NBA", "imagem" => "partials/nba.jpg"],
];
?>

<section class="carrossel-netflix">
  <h2 class="catalogo-titulo">Mais Populares</h2>
  <div class="container-carrossel">
    <?php foreach ($filmes as $filme): ?>
      <div class="filme-card">
        <img src="<?= $filme['imagem'] ?>" alt="<?= $filme['titulo'] ?>" />
        <div class="info">
          <h3><?= $filme['titulo'] ?></h3>
          <p><?= $filme['autor'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>



  
 
 

</body>
</html>
