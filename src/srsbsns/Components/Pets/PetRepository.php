<?php

namespace srsbsns\Components\Pets;

use srsbsns\Components\Repository\Repository;

class PetRepository extends Repository
{
    private $filePath = "Saves/Pets/";

    public function save(Pet $pet){
        parent::save($this->filePath, $pet->getName(), $pet->serialize());
    }

    public function loadAll()
    {
        return parent::loadAll($this->filePath);
    }

    public function load($petName)
    {
        $loadedPet = parent::load($this->filePath.$petName);
        return Pet::deserialize($loadedPet);
    }

}
