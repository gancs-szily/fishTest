<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once 'dbcontroller.php';
$db = new DBController();

if($db->connectDB()){
    echo "Sikeres kapcs";
}else{
    echo "Sikertelen kapcs";
}