<?php

namespace srsbsns\Components\Items;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class ItemRepository extends Repository
{
    private $filePath = "Saves/Items/";

    public function save(Item $item){
        parent::save($this->filePath, $item->getName(), $item->serialize());
    }

    public function loadAll()
    {
        return parent::loadAll($this->filePath);
    }

    public function load($itemName)
    {
        $loadedItem = parent::load($this->filePath.$itemName);
        return Item::deserialize($loadedItem);
    }

}
