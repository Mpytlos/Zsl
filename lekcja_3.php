<?php
$test='123abc';
$test1=0;

echo '<hr>Typ danych $test: ',gettype($test)
$x=(int)$test;
echo "<br>$x<br>";
echo 'typ danych $x: 'gettype($x);

$x=(bool)$test;
echo "<br>$x<br>";
echo 'typ danych $x: 'gettype($x);

$test2=20;
echo "<hr>$test2<br>";
$test2=(unset)$test2;
echo "$test2<br>";
echo 'typ danych $test2: ',gettype($test2);

//rozmiar typu integer
echo PHP_INT_SIZE; //8
?>
