<?php

require_once "modeli/Automobil.php";
require_once "modeli/Vozilo.php";

$audi = new Automobil;
$audi->marka = "Audi";
$audi->model = "A4";
$audi->boja = "crvena";
$audi->tezina = 2000;

$yugo = new Automobil;
$yugo->marka = "Yugo";
$yugo->model = "55";
$yugo->boja = "bela";
$yugo->vrsta = "automobil";

$BMW = new Automobil;
$BMW->marka = "BMW";
$BMW->model = "X5";
$BMW->boja = "zuta";


echo $audi->tezina;