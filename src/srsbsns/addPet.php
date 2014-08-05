<?php

require_once('include.php');

use srsbsns\Components\Pets\Pet;
use srsbsns\Components\Pets\PetRepository;

$pet = new Pet('klaas','is een gezellige jongen');

$petRepository = new PetRepository();
$petRepository->save($pet);


$pets = $petRepository->loadAll();

foreach($pets as $pet){
    $pet = $petRepository->load($pet);
}
echo $pet->getName();
print_r($pet);
