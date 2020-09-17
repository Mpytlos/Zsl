<?php
echo "$result<br>";

$x=1;
$y=1.0;

if ($x==$y){
  echo 'zmienne są równe<br>';
} else {
  echo 'zmienne są różne<br>';
}

echo gettype($x)
echo gettype($y)

$x=1;
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=$x++;
echo $x; //3
echo $y; //2
$y=++$x * 2 -1;
echo $x; //4
echo $y; //7


$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++;
echo $y; //4
$y=++$x;
echo $y; //6
echo ++$y; //7

//operatory rzutowania
//bool, int, float, string, array, object, unset
$test='123abc';
$test1=0;
$test2=20;

echo 'typ danych $test:', gettype($test);
$x=(int)$test;
echo "<hr>$x<br>";
echo 'typ danych $x:', gettype($x);

$x=(bool)$test1;
echo "<br>$x<br>";
echo 'typ danych $x: ', gettype($x);



?>
