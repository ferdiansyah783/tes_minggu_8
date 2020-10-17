<?php

require 'vendor/autoload.php';

use tester\Square;
use tester\Triangle;
use tester\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
