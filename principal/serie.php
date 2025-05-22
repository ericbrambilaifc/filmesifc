<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo de Series</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <div>
    <header>
        <div class="nav-container">
            <h3><a href="index.php" class="fw-bold">Filmes+</a></h3>
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

  <!-- Carrossel de serie -->
 <section id="catalogo-section">
  <h2 id="catalogo-titulo">Séries em Destaque</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide card-filme" data-bs-toggle="modal" data-bs-target="#serieModal">
        <img  src="partials/the.jpg" alt="Eric Kripke" />
        <div class="info">
          <h3>The Boys</h3>
          <p>Eric Kripke</p>
          <a style="margin-bottom: 25px;" target="_blank" href="https://www.primevideo.com/dp/amzn1.dv.gti.e88762ee-811c-44ae-8dd1-a795c7c1660c?autoplay=0&ref_=atv_cf_strg_wb">
            <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Bootstrap -->
  <div class="modal fade" id="serieModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="serieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="color: white;">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="serieModalLabel">The Boys</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          <img src="partials/the.jpg" alt="The Boys" width="200" class="img-fluid mb-3" />
          <p><strong>Autor:</strong> Eric Kripke</p>
          <p><strong>Ano:</strong> 2019</p>
          <p><strong>Oscars:</strong> 0</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Assistir</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ctes -->
  <?php
  $filmes = [
    ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
     ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg"],
    ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg"],
    ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg"],
    ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg"],
    ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg"],
    ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg"],
    ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg"],
    ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg"],
    ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg"],
    ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg"],
    ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg"],
    ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg"],
     ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
     ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],
      ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
    ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],
    ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg"],
    ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg"],
     ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg"],
    ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg"],
    ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg"],
    ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg"],
    ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg"],
    ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg"],
    ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg"],
  ];
  ?>

  <section class="carrossel-netflix">
    <h2 id="catalogo-titulo">Mais Populares</h2>
    <div class="container-carrossel">
      <?php
      for ($i = 0; $i < count($filmes); $i++) {
        $modalId = "modal-" . $i;
     
      ?>
        <div class="filme-card" onclick="mostrarDetalhes('<?= $filmes[$i]['titulo'] ?>', '<?= $filmes[$i]['autor'] ?>', <?= $filmes[$i]['ano'] ?>,<?= $filmes[$i]['oscars'] ?>, '<?= $filmes[$i]['imagem'] ?>')">
          <img src="<?= $filmes[$i]['imagem'] ?>" alt="<?= $filmes[$i]['titulo'] ?>" />
          <div class="info">
            <h3><?= $filmes[$i]['titulo'] ?></h3>
            <p><?= $filmes[$i]['autor'] ?></p>

         <!-- Botão que abre o modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">
          Assistir
        </button>

      

      </div>
      
    </div>
  <!-- Modal Bootstrap -->
        <div class="modal fade" id="<?= $modalId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="color: white;">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="<?= $modalId ?>Label"><?= $filmes[$i]['titulo'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <img src="<?= $filmes[$i]['imagem'] ?>" alt="<?= $filmes[$i]['titulo'] ?>" width="200" class="img-fluid mb-3" />
                <p ><strong >Autor:</strong> <?= $filmes[$i]['autor'] ?></p>
                <p><strong>Ano:</strong> <?= $filmes[$i]['ano'] ?></p>
                <p><strong>Oscars:</strong> <?= $filmes[$i]['oscars'] ?></p>
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


  <section class="carrossel-netflix">

    <h2 id="catalogo-titulo">Para você</h2>
<div class="container-carrossel">
  <?php
  $filmes2 = [
    ["titulo" => "The Office", "autor" => "Showlivre", "ano" => 1999, "oscars" => 0, "imagem" => "partials/theoffice.jpg"],
    ["titulo" => "Oscar no Oásis", "autor" => "Tae-Sik Shin", "ano" => 2011, "oscars" => 0, "imagem" => "partials/lagarto.jpg"],
    ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg"],
    ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
    ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],
    ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg"],
    ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg"],
    ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg"],
    ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg"],
    ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg"],
    ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg"],
    ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg"],
    ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg"],
    ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg"],
    ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg"],
    ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg"],
    ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg"],
     ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
     ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],
      ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg"],
    ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg"],
    ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
    ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],
    ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg"],
    ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg"],
     ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg"],
    ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg"],
    ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg"],
    ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg"],
    ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg"],
    ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg"],
    ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg"],
    ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg"],
    ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg"],
    ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg"],
    ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg"],
     ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg"],
    ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg"],
    ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg"],
    ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg"],

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
            <div class="modal-content" style="color: white;">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="<?= $modalId ?>Label"><?= $filmes2[$i]['titulo'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <img src="<?= $filmes2[$i]['imagem'] ?>" alt="<?= $filmes2[$i]['titulo'] ?>" width="200" class="img-fluid mb-3" />
                <p ><strong >Autor:</strong> <?= $filmes2[$i]['autor'] ?></p>
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