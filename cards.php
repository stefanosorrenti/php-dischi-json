<?php 
$dischi = file_get_contents('dischi.json');
$dischiArray = json_decode($dischi, true);



foreach ($dischiArray as $disco) : ?>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">

            <div class="w-50 align-self-center p-3">
                <img src=<?php echo $disco["url_cover"] ?> class="img-fluid" alt="">
            </div>

            <div class="card-body fs-6">
                <h5 class="card-title"><?php echo $disco["titolo"] . '.' ?></h5>
                <p class="card-text">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $disco["artista"] ?></li>
                    <li class="list-group-item"><?php echo $disco["anno_di_pubblicazione"]  ?></li>
                    <li class="list-group-item"><?php echo $disco["titolo"] ?></li>
                </ul>
                </p>
            </div>

        </div>
    </div>

<?php endforeach ?>