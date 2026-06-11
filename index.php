<?php
$dischi = file_get_contents('dischi.json');
$dischiArray = json_decode($dischi, true);
/* foreach ($dischiArray as $di) {

    foreach ($di as $d) {
        echo $d  . '<br>';
    };
};
 */
?>


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
        <nav class="navbar bg-body-tertiary p-3">
            <div class="container-fluid">
                <a class="nav-link" href="index.php">I MIEI DISCHI</a>
            </div>
        </nav>

        <!-- Main -->
        <main class="container">

            <!-- Card Section -->
            <section class="row gy-3 p-3">

                <?php foreach ($dischiArray as $disco) : ?>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">

                            <div class="w-50 align-self-center p-3">
                                <img src=<?php echo $disco["url_cover"] ?> class="img-fluid" alt="">
                            </div>

                            <div class="card-body fs-6">
                                <h5 class="card-title"><?php echo $disco["titolo"] ?></h5>
                                <p class="card-text">
                                <ul>
                                    <li><?php echo $disco["artista"] ?></li>
                                    <li><?php echo $disco["anno_di_pubblicazione"] ?></li>
                                    <li><?php echo $disco["titolo"] ?></li>
                                </ul>
                                </p>
                            </div>

                        </div>
                    </div>

                <?php endforeach ?>


            </section>

        </main>

        <!-- titolo, artista, url della cover, anno di pubblicazione, genere -->
    </header>
</body>

</html>