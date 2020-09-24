<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    początek pliku
    <?php
    include 'plik.php';
    include_once 'plik.php';

    echo '<br>require<br>';
    require 'plik.php';
     ?>
    koniec pliku
  </body>
</html>
