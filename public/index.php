<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Obra\Hello;

$hello = new Hello();
echo $hello->sayHello();
