<?php
require("header.php");
$dog = $dogController->read($_GET["id"]);
if ($_POST) {
    $dog->hydrate($_POST);
    $dogController->update($dog);
}
?>

<form method="post" class="container">
    <label for="name">Nom</label>
    <input type="text" value="<?= $dog->getName() ?>" name="name" id="name" placeholder="Nom du chien" class="form-control" required>
    <label for="age">Âge</label>
    <input type="number" value="<?= $dog->getAge() ?>" name="age" id="age" placeholder="Âge du chien" class="form-control" required>
    <label for="breed">Râce</label>
    <input type="text" value="<?= $dog->getBreed() ?>" name="breed" id="breed" placeholder="Râce du chien" class="form-control" required>
    <label for="color">Couleur</label>
    <input type="color" value="<?= $dog->getColor() ?>" name="color" id="color" placeholder="Couleur du chien" class="form-control" required>
    <label for="image">Image</label>
    <input type="text" name="image" value="<?= $dog->getImage() ?>" id="image" placeholder="Photo du chien" class="form-control" required>
    <input type="submit" value="Modifier" class="btn btn-warning mt-3">
</form>