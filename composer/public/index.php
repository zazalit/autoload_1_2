<?php

require_once __DIR__ .'/../vendor/autoload.php'; 

use App\Wcs\Hello;

$Hello = new App\Wcs\Hello();

$newHello = new HelloWorld\SayHello();

echo $Hello->talk();


echo $newHello->world();

