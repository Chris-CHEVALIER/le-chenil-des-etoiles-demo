<?php
require "header.php";

$cosmo = $dogController->read(1);

$dogs = $dogController->readAll();

?>

<div class="mt-3 d-flex justify-content-around">
    <?php foreach ($dogs as $dog): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $dog->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $dog->getName() ?></h5>
                <p class="card-text"><?= $dog->getBreed() ?></p>
                <a href="./update.php?id=<?= $dog->getId() ?>" class="btn btn-warning">Modifier</a>
                <a href="./delete.php?id=<?= $dog->getId() ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>

</html>