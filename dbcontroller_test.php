<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once 'dbcontroller.php';
$db = new DBController();

//kapcs teszt
if($db->connectDB()){
    echo "Sikeres kapcs";
}else{
    echo "Sikertelen kapcs";
}

//select teszt
$query="SELECT * FROM fishingrod";
$eredmeny=$db->executeSelectQuery($query);

if($eredmeny !== "hiba"){
    echo "<br>";
    echo "lekérdezés sikeres";
    echo "<pre>";
    print_r($eredmeny);
    echo "<pre>";
}else{
    echo "lekérdezés sikertelen";
    echo "<pre>";
    print_r($eredmeny);
    echo "<pre>";
}
$db->closeDB();
echo "lezárva";