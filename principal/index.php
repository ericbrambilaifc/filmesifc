<!DOCTYPE html>
<html lang="en">

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

    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Digite seu nome</h5>
                </div>
                <div class="modal-body">
                    <input type="text" id="nomeUsuario" class="form-control" placeholder="Seu nome">
                </div>
                <div class="modal-footer">
                    <button type="button" id="salvarNome" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </div>



    <header id="header">
        <h3 class="fw-bold">Filmes +</h3>
        <section id="lado-2">

            <a class="fw-bold px-2" href="">Series</a>
            <a class="fw-bold px-2" href="filmes.php">Filmes</a>
            <a class="fw-bold px-2" href="">Sobre Nós</a>
            <a class="fw-bold px-2 " href="">Contato</a>
        </section>

    </header>

    <main class="row">
        <div class="d-flex justify-content-center   ">

            <div id="botao-main" class="">
                <h3 id="text-conheca">
                    Seja bem vindo! <span id="usuarioNome">(nome de usuário)</span> <br>
                    Conheça o melhor site para conhecer filmes
                </h3>
                <a id="botao" class="" href="filmes.php">Conheça nossos filmes</a>
                <a id="botao" class="" href="serie.php">Conheça nossas series</a>
            </div>
            <div class="">
                <img class="w-75" id="image-avatar" src="./assets/avatar.svg" alt="">
            </div>

        </div>
    </main>


</body>
<script>
    // Quando a página carregar, mostra o modal
    window.onload = () => {
        const modal = new bootstrap.Modal(document.getElementById('userModal'));
        modal.show();

        document.getElementById('salvarNome').addEventListener('click', () => {
            const nome = document.getElementById('nomeUsuario').value.trim();
            if (nome !== '') {
                document.getElementById('usuarioNome').innerText = nome;
                modal.hide();
            } else {
                alert("Por favor, digite seu nome!");
            }
        });
    };
</script>


</html>