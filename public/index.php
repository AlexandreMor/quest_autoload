<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;

$talk= new Hello();
echo $talk->talk();
