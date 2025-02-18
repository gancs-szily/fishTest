<?php
require_once "restkezelo.php";

$rk=new RestKezelo();

echo "200-as teszt";
echo $rk->gethttpStatusUzenet(200)."<br>";

echo "400-as teszt";
echo $rk->gethttpStatusUzenet(400)."<br>";

echo "404-as teszt";
echo $rk->gethttpStatusUzenet(404)."<br>";

echo "500-as teszt";
echo $rk->gethttpStatusUzenet(500)."<br>";

echo "100-as teszt";
echo $rk->gethttpStatusUzenet(999)."<br>";