<?php
require_once "fishingrod.php";

$fr=new FishingRod();

echo "<h2>Összes horgázsbot</h2>";
$ar=$fr->getAllFishingRods();
if(!empty($ar)){
    foreach ($ar as $pbot) {
        echo "id: ".$pbot['fr_ID'] . " - Név: ".$pbot['name']."<br>";    
    }
}else{
    echo "nincs találat";
}

echo "<h2>ID alapján</h2>";
$rodbyid=$fr->getFishingRodById('1');
if(!empty($rodbyid)){
    foreach ($rodbyid as $pbot) {
        echo "id: ".$pbot['fr_ID'] . " - Név: ".$pbot['name']."<br>";    
    }
}else{
    echo "nincs találat";
}

echo "<h2>type alapján</h2>";
$rodbyT=$fr->getFishingRodByType('Feeder');
if(!empty($rodbyT)){
    foreach ($rodbyT as $pbot) {
        echo "id: ".$pbot['fr_ID'] . " - Név: ".$pbot['name']."<br>";    
    }
}else{
    echo "nincs találat";
}


