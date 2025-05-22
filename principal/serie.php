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
            <li><a href="genero.php">Genero</a></li>
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
            <img src="partials/the.jpg" alt="Eric Kripke" />
            <div class="info">
              <h3>The Boys</h3>
              <p>Eric Kripke</p>
              <a style="margin-bottom: 25px;" target="_blank"
                href="https://www.primevideo.com/dp/amzn1.dv.gti.e88762ee-811c-44ae-8dd1-a795c7c1660c?autoplay=0&ref_=atv_cf_strg_wb">
                <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
                <a href=""></a>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Bootstrap -->
      <div class="modal fade" id="serieModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="serieModalLabel" aria-hidden="true">
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
      ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg", "link" => "https://www.primevideo.com/detail/Chaves/0JGKTUD4UOLES3FIEFMC2RRKJY"],
      ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg", "link" => "https://www.netflix.com/br/title/70143836?source=35"],
      ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "https://www.primevideo.com/-/pt/detail/Kick-Buttowski-Suburban-Daredevil/0PDLT9P2CY7EFGGEXAYS7S4QBF"],
      ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "https://www.disney.com.br/cavaleiro-da-lua"],
      ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "https://www.netflix.com/br/title/80025172?source=35"],
      ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg", "link" => "https://globoplay.globo.com/pica-pau/t/gsNrptc2cR/"],
      ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg", "link" => "https://www.disneyplus.com/pt-br/browse/entity-9995dda1-d70a-4d15-98ba-72f1d10fa406?distributionPartner=google"],
      ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg", "link" => "https://www.primevideo.com/dp/amzn1.dv.gti.06b03ed8-ac33-4f54-acd7-5b58153c4e2c?autoplay=0&ref_=atv_cf_strg_wb"],
      ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg", "link" => "https://www.netflix.com/br/title/70140425?source=35"],
      ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg", "link" => "https://www.netflix.com/watch/80211991?source=35"],
      ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg", "link" => "https://www.netflix.com/watch/70136126?source=35"],
      ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg", "link" => "https://www.netflix.com/watch/80197526?source=35"],
      ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg", "link" => "https://www.netflix.com/watch/80200942?source=35"],
      ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg", "link" => "https://www.netflix.com/watch/81442394?source=35"],
      ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg", "link" => "https://www.primevideo.com/dp/amzn1.dv.gti.e3f09eab-850d-4e29-ac40-04dea799c75f?autoplay=0&ref_=atv_cf_strg_wb"],
      ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg", "link" => "https://exemplo.com/adolecente"],
      ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg", "link" => "https://exemplo.com/setemonstrinhos"],
      ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "https://exemplo.com/kickbuttowski"],
      ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "https://exemplo.com/lua"],
      ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "https://exemplo.com/phineasferb"],
      ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "https://exemplo.com/thegoodplace"],
      ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg", "link" => "https://exemplo.com/chaves"],
      ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg", "link" => "https://exemplo.com/breakingbad"],
      ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "https://exemplo.com/kickbuttowski"],
      ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "https://exemplo.com/lua"],
      ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "https://exemplo.com/phineasferb"],
      ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "https://exemplo.com/thegoodplace"],
      ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "https://exemplo.com/narcos"],
      ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg", "link" => "https://exemplo.com/picapau"],
      ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg", "link" => "https://exemplo.com/gravityfalls"],
      ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "https://exemplo.com/narcos"],
      ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg", "link" => "https://exemplo.com/turmadamonica"],
      ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg", "link" => "https://exemplo.com/prisionbreak"],
      ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg", "link" => "https://exemplo.com/you"],
      ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg", "link" => "https://exemplo.com/dexter"],
      ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg", "link" => "https://exemplo.com/sexeducation"],
      ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg", "link" => "https://exemplo.com/elite"],
      ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg", "link" => "https://exemplo.com/dnadocrime"],
    ];
    ?>


    <section class="carrossel-netflix">
      <h2 id="catalogo-titulo">Mais Populares</h2>
      <div class="container-carrossel">
        <?php
        for ($i = 0; $i < count($filmes); $i++) {
          $modalId = "modal-" . $i;

          ?>
          <div style="padding-bottom: 25px;" class="filme-card"
            onclick="mostrarDetalhes('<?= $filmes[$i]['titulo'] ?>', '<?= $filmes[$i]['autor'] ?>', <?= $filmes[$i]['ano'] ?>,<?= $filmes[$i]['oscars'] ?>, '<?= $filmes[$i]['imagem'] ?>')">
            <img src="<?= $filmes[$i]['imagem'] ?>" alt="<?= $filmes[$i]['titulo'] ?>" />
            <div class="info">
              <h3 style="margin-top: 22px;"><?= $filmes[$i]['titulo'] ?></h3>
              <p><?= $filmes[$i]['autor'] ?></p>

              <!-- Botão que abre o modal -->
              <a target="_blank" href="<?= $filmes[$i]['link'] ?>" class="play-icon">
                <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
              </a>



              <button type="button" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>"
                style="background: transparent; border: none; margin-bottom: 25px;">
                <i class="bi bi-exclamation-circle"
                  style="color: white; font-size: 2rem; margin-left: 6px; cursor: pointer;"></i>

              </button>




            </div>

          </div>
          <!-- Modal Bootstrap -->
          <div class="modal fade" id="<?= $modalId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="color: white;">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="<?= $modalId ?>Label"><?= $filmes[$i]['titulo'] ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <img src="<?= $filmes[$i]['imagem'] ?>" alt="<?= $filmes[$i]['titulo'] ?>" width="200"
                    class="img-fluid mb-3" />
                  <p><strong>Autor:</strong> <?= $filmes[$i]['autor'] ?></p>
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
          ["titulo" => "The Office", "autor" => "Showlivre", "ano" => 1999, "oscars" => 0, "imagem" => "partials/theoffice.jpg", "link" => "https://www.netflix.com/watch/70136120?source=35"],
          ["titulo" => "Oscar no Oásis", "autor" => "Tae-Sik Shin", "ano" => 2011, "oscars" => 0, "imagem" => "partials/lagarto.jpg", "link" => "https://www.netflix.com/watch/70230417?source=35"],
          ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "https://www.netflix.com/watch/80025172?source=35"],
          ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg", "link" => "https://www.youtube.com/watch?v=UmvvCL4MnFU"],
          ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg", "link" => "https://www.primevideo.com/detail/Chaves/0JGKTUD4UOLES3FIEFMC2RRKJY"],
          ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg", "link" => "https://www.netflix.com/watch/70143836?source=35"],
          ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "#"],
          ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "#"],
          ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "#"],
          ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "#"],
          ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "#"],
          ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg", "link" => "#"],
          ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg", "link" => "#"],
          ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg", "link" => "#"],
          ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg", "link" => "#"],
          ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg", "link" => "#"],
          ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg", "link" => "#"],
          ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg", "link" => "#"],
          ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg", "link" => "#"],
          ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg", "link" => "#"],
          ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg", "link" => "#"],
          ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg", "link" => "#"],
          ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg", "link" => "#"],
          ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "#"],
          ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "#"],
          ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "#"],
          ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "#"],
          ["titulo" => "Chaves", "autor" => "Televisa", "ano" => 1999, "oscars" => 0, "imagem" => "partials/chaves.jpg", "link" => "#"],
          ["titulo" => "Breaking Bad", "autor" => "AMC", "ano" => 2005, "oscars" => 1, "imagem" => "partials/BreakingBad.jpg", "link" => "#"],
          ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "#"],
          ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "#"],
          ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "#"],
          ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "#"],
          ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "#"],
          ["titulo" => "Pica-Pau", "autor" => "Walter Lantz ", "ano" => 1940, "oscars" => 0, "imagem" => "partials/pica.jpg", "link" => "#"],
          ["titulo" => "Gravity Falls", "autor" => "Disney", "ano" => 2012, "oscars" => 0, "imagem" => "partials/gravityFalls.jpg", "link" => "#"],
          ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "#"],
          ["titulo" => "Turma da Monica", "autor" => "Mauricio Araújo de Sousa", "ano" => 1963, "oscars" => 0, "imagem" => "partials/turma.jpg", "link" => "#"],
          ["titulo" => "Prision Braek", "autor" => "Marty Adelstein", "ano" => 2005, "oscars" => 0, "imagem" => "partials/prision.jpg", "link" => "#"],
          ["titulo" => "You", "autor" => "Fox", "ano" => 2017, "oscars" => 0, "imagem" => "partials/you.jpg", "link" => "#"],
          ["titulo" => "Dexter", "autor" => "James Manos, Jr.", "ano" => 2006, "oscars" => 0, "imagem" => "partials/dext.jpg", "link" => "#"],
          ["titulo" => "Sex Education", "autor" => "J. K. Rowling", "ano" => 2019, "oscars" => 0, "imagem" => "partials/sex.jpg", "link" => "#"],
          ["titulo" => "Elite", "autor" => "David Crane", "ano" => 2017, "oscars" => 0, "imagem" => "partials/elite.jpg", "link" => "#"],
          ["titulo" => "DNA do Crime", "autor" => "Heitor Dhalia,", "ano" => 2017, "oscars" => 0, "imagem" => "partials/dnadocrime.jpg", "link" => "#"],
          ["titulo" => "Euphoria", "autor" => "David Benioff", "ano" => 2019, "oscars" => 0, "imagem" => "partials/eupho.jpg", "link" => "#"],
          ["titulo" => "Adolecente", "autor" => "Tae-Sik Shin", "ano" => 2025, "oscars" => 0, "imagem" => "partials/adole.jpg", "link" => "#"],
          ["titulo" => "Narcos", "autor" => "Cris Moura", "ano" => 2017, "oscars" => 0, "imagem" => "partials/narcos.jpg", "link" => "#"],
          ["titulo" => "Os Sete Monstrinhos", "autor" => "Showlivre", "ano" => 1998, "oscars" => 0, "imagem" => "partials/monstrinhos.jpg", "link" => "#"],
          ["titulo" => "Kick Buttowski", "autor" => "Disney XD", "ano" => 2000, "oscars" => 0, "imagem" => "partials/kick.jpg", "link" => "#"],
          ["titulo" => "Lua", "autor" => "Disney", "ano" => 2024, "oscars" => 0, "imagem" => "partials/lua.jpg", "link" => "#"],
          ["titulo" => "Phineas e Ferb", "autor" => "Disney", "ano" => 2007, "oscars" => 0, "imagem" => "partials/phineasFerb.jpg", "link" => "#"],
          ["titulo" => "The good Place", "autor" => "Showlivre", "ano" => 2016, "oscars" => 0, "imagem" => "partials/good.jpg", "link" => "#"]
        ];
        for ($i = 0; $i < count($filmes2); $i++) {
          $modalId = "staticBackdrop" . $i;
          ?>

          <div style="padding-bottom: 25px;" class="filme-card">
            <img src="<?= $filmes2[$i]['imagem'] ?>" alt="<?= $filmes2[$i]['titulo'] ?>" />
            <div class="info">
              <h3 style="margin-top: 22px;"><?= $filmes2[$i]['titulo'] ?></h3>
              <p><?= $filmes2[$i]['autor'] ?></p>

              <!-- Botão que abre o modal -->
              <a target="_blank" href="<?= $filmes2[$i]['link'] ?>" class="play-icon">
                <i class="bi bi-play-circle-fill" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
              </a>



              <button type="button" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>"
                style="background: transparent; border: none; margin-bottom: 25px;">
                <i class="bi bi-exclamation-circle" style="color: white; font-size: 2rem; margin-left: 6px;"></i>
              </button>



            </div>

          </div>

          <!-- Modal Bootstrap -->
          <div class="modal fade" id="<?= $modalId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="color: white;">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="<?= $modalId ?>Label"><?= $filmes2[$i]['titulo'] ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <img src="<?= $filmes2[$i]['imagem'] ?>" alt="<?= $filmes2[$i]['titulo'] ?>" width="200"
                    class="img-fluid mb-3" />
                  <p><strong>Autor:</strong> <?= $filmes2[$i]['autor'] ?></p>
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
  <style> footer {
  background-color: #770000;
  color: #fff;
  padding: 30px 20px;
  text-align: center;
  font-size: 14px;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.footer-links ul {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 20px;
}

.footer-links ul li {
  display: inline;
}

.footer-links ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease;
}


.footer-info {
  margin-top: 15px;
  font-size: 12px;
}
</style>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
</body>

</html>