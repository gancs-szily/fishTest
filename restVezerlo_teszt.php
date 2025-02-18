<?php

require_once "restVezerlo.php";

$frr=new FishingRodrestKezelo();

print("összes");
$_GET['view']="all";
$frr->getAllFRod();
print("\n");

print("id alapján");
$_GET['view']='single';
$_GET['id']=1;
$frr->getFRodById($_GET['id']);
print("\n");


// print("nem létező id alapján");
// $_GET['view']='single';
// $_GET['id']=999;
// $frr->getFRodById($_GET['id']);
// print("\n");


print("típus alapján");
$_GET['view']='tipus';
$_GET['tid']='Rakos';
$frr->getFRodByType($_GET['tid']);
print("\n");

// print("nem lét típus alapján");
// $_GET['view']='tipus';
// $_GET['tid']='unknown';
// $frr->getFRodByType($_GET['tid']);
// print("\n");