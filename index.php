


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
                    alt="Apple Music logo"
                    >
                </a>
                <a class="nav-link" href="addCd.php">Aggiungi disco</a>
            </div>
        </nav>
        
    </header>

        <!-- Main -->
        <main class="bg-dark">
            <div class="container">

                <!-- Card Section -->
                <section class="row gy-3 p-3">
                    <?php
                        require("cards.php")
                    ?>
                </section>

            </div>
        </main>

        
</body>

</html>