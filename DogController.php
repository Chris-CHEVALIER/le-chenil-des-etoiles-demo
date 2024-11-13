<?php

class DogController
{
    private PDO $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=chenil", "root", "root");
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    // Méthodes CRUD
    public function create(Dog $newDog)
    {
        $request = $this->db->prepare("INSERT INTO dog (name, age, breed, color, image) VALUES (?, ?, ?, ?, ?)");
        $request->execute([
            $newDog->getName(),
            $newDog->getAge(),
            $newDog->getBreed(),
            $newDog->getColor(),
            $newDog->getImage(),
        ]);
    }

    public function read(int $id)
    {
        $request = $this->db->prepare("SELECT * FROM dog WHERE id = ?");
        $request->execute([$id]);
        $data = $request->fetch(); // ["id" => 2, "name" => "Imma", ...]
        $dog = new Dog($data);
        return $dog;
    }

    public function readAll()
    {
        $dogs = [];
        $request =  $this->db->query("SELECT * FROM dog ORDER BY name");
        $datas = $request->fetchAll();
        foreach ($datas as $data) {
            $dogs[] = new Dog($data);
        }
        return $dogs;
    }

    public function update(Dog $dog)
    {
        $request = $this->db->prepare("UPDATE dog SET name = ?, age = ?, breed = ?, color = ?, image = ? WHERE id = ?");
        $request->execute([
            $dog->getName(),
            $dog->getAge(),
            $dog->getBreed(),
            $dog->getColor(),
            $dog->getImage(),
            $dog->getId(),
        ]);
    }

    public function delete(int $id)
    {
        $request = $this->db->prepare("DELETE FROM dog WHERE id = ?");
        $request->execute([$id]);
    }
}
