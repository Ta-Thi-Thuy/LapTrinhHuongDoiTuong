<?php

include "th_rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width,$height);

echo $rectangle->width;
echo $rectangle->height;

$height = 30;
$width = 20;

echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo (" Your Rectangle ".$rectangle->display());
