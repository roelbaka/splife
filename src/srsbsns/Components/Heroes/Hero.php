<?php

namespace srsbsns\Components\Heroes;

class Hero
{
    private $name;
    private $description;

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

    public function serialize()
    {
        return [
            'name' => $this->name, 
            'description' => $this->description
        ];
    }

    public static function deserialize($data)
    {
        return new static(
            $data['name'],
            $data['description']
        ); 
    }
}
