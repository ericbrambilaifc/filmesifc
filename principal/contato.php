<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/style.css">

    <title>Filmes +</title>
</head>

<body>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>

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

    <main class="row">
        <div class="d-flex justify-content-center">
            <section class="col-8 d-flex align-items-center">
                <div class="col-8 pe-5">
                    <h3 id="sobre-titulo" class="fw-bold">Contato</h3>

                    <p>Entre em contato pelo nosso whatsapp ou pelas nossas redes sociais</p>
                    <div class="card" style="width: 20rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="color: #770000;"><i class="bi bi-whatsapp mx-2"></i> 49 9994-0025</li>
                            <li class="list-group-item" style="color: #770000;"><i class="bi bi-instagram mx-2"></i> Filmes+</li>
                            <li class="list-group-item" style="color: #770000;"><i class="bi bi-facebook mx-2"></i> Filmes+</li>
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <img id="image-avatar-contato" src="./assets/avatar-contatto.svg" alt="Ilustração da Filmes+">
                </div>
            </section>
        </div>
    </main>
</body>

</html>