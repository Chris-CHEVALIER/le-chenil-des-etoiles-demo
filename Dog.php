<?php

class Dog 
{
    // Attributs
    private $id;
    private $name;
    private $age;
    private $breed;
    private $color;
    private $image;

    /*
    $data = [
        "id" => 1,
        "name" => "Cosmo",
        "age" => 2,
        "breed" => "Golden Retriever",
        "color" => "sable"
    ]; 
    $cosmo = new Dog($data);
    */

    // Méthodes
    /* public function __construct(int $newId, string $newName, int $newAge, $newBreed, $newColor)
    {
        $this->setId($newId);
        $this->setName($newName);
        $this->setAge($newAge);
        $this->setBreed($newBreed);
        $this->setColor($newColor);
    } */

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key); // setId, setName, setAge, setBreed, setColor, setImage
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $newAge)
    {
        if ($newAge > 0 && $newAge < 25) {
            $this->age = $newAge;
        }
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function bark()
    {
        echo "Wouaf wouaf!<br>";
    }

    public function eat()
    {
        echo "Miam miam!<br>";
    }  
    
    public function display(): void
    {
        echo "{$this->getName()} est un {$this->getBreed()} de couleur {$this->getColor()} de {$this->getAge()} ans !<br>";
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
}