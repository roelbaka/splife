<?php

require_once('include.php');

use srsbsns\Components\Heroes\Hero;
use srsbsns\Components\Heroes\HeroRepository;

$hero1 = new Hero('klaas','is een gezellige jongen');

$heroRepository = new HeroRepository();
$heroRepository->save($hero1);


$heroes = $heroRepository->loadAll();
print_r($heroes);
