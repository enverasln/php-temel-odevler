<?php

require_once 'Ucgen.php';
require_once 'Dortgen.php';
require_once 'Kare.php';

echo "Kenarları 3, 4 ve 5 olan üçgene ait bilgiler: <br>";
$ucgen = new Ucgen(3, 5, 4);
echo $ucgen;
echo "<br>";


echo "İki kenar uzunluğu 10, 20 olan dörtgene ait bilgiler: <br>";
$dortgen = new Dortgen(10, 20);
echo $dortgen; 
echo "<br>";

echo "Bir kenar uzunluğu 30 olan kareye ait bilgiler: <br>";
$kare = new Kare(30);
echo $kare; 
echo "<br>";