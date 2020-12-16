<?php

use App\MagicClass;
use Geometry\Point;
use Geometry\Vector;

require 'vendor/autoload.php';
require 'src/MagicClass.php';
require 'src/Geometry.php';

$mc = new MagicClass;

$mc->method();
MagicClass::method();
$mc->property;
$mc->property = "smth";
isset($mc->property);
unset($mc->property);
unserialize(serialize($mc));
$mc();
clone $mc;
print($mc);

echo "<br/>";

$T1 = new Point(14, 9);
$V1 = new Vector(15, 30);
$V2 = new Vector;
$V3 = new Vector(-2, 1);

var_dump($V1->CalcLength());
echo "<br/>";
var_dump($V2->CalcLength());
echo "<br/>";
var_dump($V3->CalcLength());
echo "<br/>";
var_dump($V3->IsPerpendicularTo($V1));
echo "<br/>";
$x = $V1->x - $T1->x;
$y = $V1->y - $T1->y;
$T1->Add($x, $y);
var_dump($T1);
echo "<br/>";
