<!DOCTYPE html>
<html lang="\" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>dane użytkownika</h4>
    <?php
      //echo '<pre>',print_r($_GET),'</pre>';
      $pass = $_GET['pass'];
      $pass = $_GET['color'];
      switch ($color) {
        case 'r':
          $color = 'Czerwony';
          break;
        case 'g':
          $color = 'Zielony';
          break;
        case 'b':
          $color = 'Niebieski';
          break;
      }

      if (isset($_GET['regulamin']))
      {
        $reg = 'regulamin zatwierdzony';
      }else{
        $reg = 'proszę zatwierdzić regulamin';
      }
      
        echo <<<DATA
        login: $_GET[login]<br>
        hasło: {$_GET['pass']}<br>
        hasło: $pass<br>
        ulubiony kolor: $color
DATA;
     ?>
  </body>
</html>
