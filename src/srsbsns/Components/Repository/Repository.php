<?php

namespace srsbsns\Components\Repository;

abstract class Repository
{
    public abstract function save();

    public abstract function load();
}
