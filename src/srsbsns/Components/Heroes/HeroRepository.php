<?php

namespace srsbsns\Components\Heroes;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class HeroRepository extends Repository
{
    private $filePath = "Saves/Heroes/";

    public function save(Hero $hero){
        parent::save($this->filePath, $hero->getName(), $hero->serialize());
    }

    public function loadAll()
    {
        return parent::loadAll($this->filePath);
    }

    public function load($heroName)
    {
        $loadedHero = parent::load($this->filePath.$heroName);
        return Hero::deserialize($loadedHero);
    }
}
