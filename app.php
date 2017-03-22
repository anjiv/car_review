<?php
include_once 'Sedan.php';
include_once 'Xuv.php';

$xuv = new Xuv;
$xuv->showColor ('red');
$xuv->showMileage (20);
$xuv->showBrand ('bmw');
$xuv->showResult();

$sedan = new Sedan;
$sedan->showColor ('blue');
$sedan->showMileage (30);
$sedan->showBrand ('audi');
$sedan->showResult();
?>
