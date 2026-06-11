
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I miei dischi</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header>

        <nav class="navbar bg-black p-3 text-light">
            <div class="container-fluid">
                <a class="navbar-brand" style="width: 30px;" href="index.php">
                    <img
                        class="img-fluid"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Apple_Music_icon.svg/3840px-Apple_Music_icon.svg.png"
                        alt="Apple Music logo">
                </a>
                <a class="nav-link" href="index.php">Torna alla lista</a>
            </div>
        </nav>

    </header>

    <!-- Main -->
    <main class="bg-dark vh-100">
        <div class="container">

            <!-- Card Section -->
            <section class="row gy-3 p-3">



                <div class="col-12 col-lg-6 mx-lg-auto my-5">
                    <div class="card">

                        <div class="card-body fs-6">
                            <form action="server.php" method="POST">

                                <label for="titolo" class="form-label">Titolo brano</label>
                                <input type="text" class="form-control" name="titolo" id="titolo" placeholder="Drake...">

                                <label for="artista" class="form-label">Nome Artista</label>
                                <input type="text" class="form-control" name="artista" id="artista" placeholder="Kendrick Lamar...">

                                <label for="url_cover" class="form-label">Link copertina</label>
                                <input type="text" class="form-control" name="url_cover" id="url_cover" placeholder="http://.....">

                                <label for="anno_di_pubblicazione" class="form-label">Anno di pubblicazione</label>
                                <input type="text" class="form-control" name="anno_di_pubblicazione" id="anno_di_pubblicazione" placeholder="2000...">

                                <label for="genere" class="form-label">Genere</label>
                                <input type="text" class="form-control" name="genere" id="genere" placeholder="Neomelodico...">

                                <button type="submit" class="btn btn-danger">Aggiungi</button>
                            </form>

                            </p>
                        </div>

                    </div>
                </div>




            </section>
            <!-- titolo, artista, url della cover, anno di pubblicazione, genere -->
        </div>
    </main>


</body>

</html>