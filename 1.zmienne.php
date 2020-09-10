<!DOCTYPE html>
<html lang="\" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name='janusz';
    $surname='nowak';
    echo 'imie: $name<br>';
    echo "imie: $name<br>";
    echo "test<br>";
    echo "nazwisko $surname".'<hr>';
    //konkatanacja = "." ^^^^ czyli połączenie komend
    //typy danych
    //boolean
    //DLACZEGO TO DZIAŁA NIE ROZUMIEM
    $prawda = true;
    $fałsz = false;
    echo $prawda; //1
    echo $fałsz.'<br>'; //nie wyświetli się

    //integer

    $bin = 0b1010; //10
    $oct = 010; //8
    $dec = 20; //20
    $hex = 0xB; //11

    echo $hex.'<hr>';
    //i guess to takie przeliczanie liczb idk

//składnia heredoc
$name='krystyna';
$text = <<< ETYKIETA
imię: $name<br>
nazwisko: $surname<hr>
ETYKIETA;

echo $text;

echo <<<E
Heredoc 2<br>
imie: $name<hr>
E;

//składnia Nowdoc
echo <<< 'E'
nowdoc 2<br>
imie: $name<hr>
E;

$city ='poznań';
echo "nazwa zmiennej: $city";
    ?>
  </body>
</html>
