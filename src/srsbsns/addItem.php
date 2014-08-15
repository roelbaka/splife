<?php

require_once('include.php');

use srsbsns\Components\Items\Item;
use srsbsns\Components\Items\ItemRepository;

$item = new Item('rod of ages','is een gezellige jongen');
$item->addStat('ronde dikke borsten');
$item->addStat('rondere dikke borsten');

$itemRepository = new ItemRepository();
$itemRepository->save($item);

$items = $itemRepository->loadAll();

foreach($items as $item){
    $item = $iktemRepository->load($item);
}
echo $item->getName();
print_r($item);
