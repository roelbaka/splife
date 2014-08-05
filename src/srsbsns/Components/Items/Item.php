<?php

namespace srsbsns\Components\Items;

class Item
{
    private $name;
    private $description;
    private $stats = [];

    public function __construct($name, $description)
    {
        $this->name        = $name;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function addStat($stat)
    {
        $this->stats[] = $stat;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function serialize()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'stats' => $this->stats
        ];
    }

    public static function deserialize($data)
    {
        $object = new static(
            $data['name'],
            $data['description']
        ); 

        foreach($data['stats'] as $stat ){
            $object->addStat($stat);
        }

        return $object;
    }
}
