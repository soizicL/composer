<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$AppWcsHello = new Hello();
echo $AppWcsHello -> talk();

echo '<br/>';

$sayHello = new SayHello();
echo $sayHello -> world();


