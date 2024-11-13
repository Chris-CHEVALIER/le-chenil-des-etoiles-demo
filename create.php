<?php
require("header.php");
if ($_POST) {
    $data = $_POST;
    $newDog = new Dog($data);
    $dogController->create($newDog);
}
?>

<form method="post" class="container">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name" placeholder="Nom du chien" class="form-control" required>
    <label for="age">Âge</label>
    <input type="number" name="age" id="age" placeholder="Âge du chien" class="form-control" required>
    <label for="breed">Râce</label>
    <input type="text" name="breed" id="breed" placeholder="Râce du chien" class="form-control" required>
    <label for="color">Couleur</label>
    <input type="color" name="color" id="color" placeholder="Couleur du chien" class="form-control" required>
    <label for="image">Image</label>
    <input type="text" name="image" id="image" placeholder="Photo du chien" class="form-control" required>
    <input type="submit" value="Créer" class="btn btn-success mt-3">
</form>