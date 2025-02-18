<?php
require_once "FishingRodKezelo.php";

$frk=new FishingRodrestKezelo();
echo json_encode([
    "message"=>"Összeg horgászbot teszt\n",
    "data"=>$frk->getAllFRod()
]);
print("\n");

print("horgészbot lek.id\n");

echo json_encode([
    "message"=>"id alapján\n",
    "data"=>$frk->getFRodById(1)
]);

print("\n");

print("horgészbot lek.típus\n");

echo json_encode([
    "message"=>"típus alapján\n",
    "data"=>$frk->getFRodByType('Rakos')
]);

print("\n");