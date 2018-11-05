<?php

namespace App;

use Classes\Test;
use Classes\Foo;
use Classes\Bar;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__).DS);

session_start();

require_once'Autoloader.php';

Autoloader::register();

$test = new Test();
$foo = new Foo();
$bar = new Bar();

var_dump($test,$foo,$bar);
