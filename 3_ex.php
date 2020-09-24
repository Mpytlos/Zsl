<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    p {
      text-decoration: underline;
    }
    </style>
  </head>
  <body>
    <p>dane kontaktowe</p>
    <?php
    include 'katalog/mateusz.php';
    include 'katalog/pytlos.php';
    echo "imie: $imie<br>";
    echo "nazwisko: $nazwisko";
    echo '<hr>';

     ?>
  </body>
</html>
