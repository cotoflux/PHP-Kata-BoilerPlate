<?php

include 'vendor/autoload.php';

use App\Wizard;
use App\Muggle;

$harry = new Wizard;
$harry->nameWizard ="Harry";
$harry->DNI = 1413;
$harry->saludar();
$harry->leviosa();


$hermione = new Wizard;
$hermione->nameWizard="Hermione";
$hermione->DNI = 1450;
$hermione->saludar();
$hermione->leviosa();

$nuria = new Muggle;
$nuria->nameMuggle="Nuria";
$nuria->saludar("Hermione");

